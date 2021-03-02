<?php
require_once "session.php";

session_start();


$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email-sign'];
$pwd = $_POST['password-sign'];

$hashed_pwd = hash('sha256',$pwd);

$sign = "SELECT * FROM customer WHERE email='$email'";
$result = mysqli_query($con, $sign);
$num =mysqli_num_rows($result);
if ($num == 1) {
    echo "username già presente";
} else {
    $reg = "INSERT INTO customer (email,hashed_pwd,first_name,last_name) VALUES ('$email', '$hashed_pwd','$nome','$cognome')";
    mysqli_query($con, $reg);
    header('location:Login.php');
}


