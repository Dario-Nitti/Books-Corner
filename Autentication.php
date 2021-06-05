<?php
include "lib.inc.php";

$email = $_POST['email-log'];
$pwd = $_POST['password-log'];
$pwd = hash('sha256', $pwd);

$email = mysqli_real_escape_string($con, $email);
$pwd = mysqli_real_escape_string($con, $pwd);
$log = "SELECT * FROM customer WHERE email='$email' AND hashed_pwd='$pwd'";
$result = mysqli_query($con, $log);


$num = mysqli_num_rows($result);


if ($num == 1) {
    session_start();
    $_SESSION['user'] = $email;
    header('location:Profile.php');
} else {
    $email = $_POST['email-log'];
    $pwd = $_POST['password-log'];
    $pwd = hash('sha256', $pwd);

    $email = mysqli_real_escape_string($con, $email);
    $pwd = mysqli_real_escape_string($con, $pwd);
    $log = "SELECT * FROM admin WHERE email='$email' AND hashed_pwd='$pwd'";
    $result = mysqli_query($con, $log);


    $num = mysqli_num_rows($result);
    if ($num == 1) {
        session_start();
        session_regenerate_id();
        $_SESSION['id'] = session_id();
        $_SESSION['user'] = $email;
        header('location:Upload-product.tpl');
    } else {
        echo "Username e Password errate!!";

    }

}