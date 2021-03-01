<?php
require_once "session.php";


$email = $_POST['email-log'];
$pwd = $_POST['password-log'];
$pwd = hash('sha256', $pwd);

$email = mysqli_real_escape_string($con, $email);
$pwd = mysqli_real_escape_string($con, $pwd);
$log = "SELECT * FROM customer WHERE email='$email' AND pwd='$pwd'";
$result = mysqli_query($con, $log);


$num = mysqli_num_rows($result);


if ($num == 1) {
    session_start();
    $_SESSION['user'] = $email;
    header('location:../View/Profile.php');
} else {
    loginAdmin();

}

function loginAdmin()
{

    $email = $_POST['email-log'];
    $pwd = $_POST['password-log'];
    $pwd = hash('sha256', $pwd);

    $email = mysqli_real_escape_string($con, $email);
    $pwd = mysqli_real_escape_string($con, $pwd);
    $log = "SELECT * FROM admin WHERE email='$email' AND pwd='$pwd'";
    $result = mysqli_query($con, $log);


    $num = mysqli_num_rows($result);
    if ($num == 1) {
        session_start();
        $_SESSION['user'] = $email;
        header('location:../View/Upload-product.php');
    } else {
        echo " qualcosa è andato storto";

    }
}


