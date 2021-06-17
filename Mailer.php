<?php
include "lib.inc.php";
$smarty=includesmarty();
$to_email = "dario.nitti@outlook.it";
$name= $_POST['name'];
$email=$_POST['email'];
$body=$_POST['message'];

$subject = "Contatti dal sito";
$headers = "From: $email ";

if (mail($to_email, $subject, $body, $headers)) {
    header("Location:Contact.php");

} else {
    header("Location:Error.php");
    $smarty->assign("error","email non inviata");

}