<?php
include "lib.inc.php";
$smarty = includesmarty();
if (!isset($_SESSION['user'] ) and !isset($_SESSION['password'] ) )
{
    header('location:Login.php');
    exit;
}else{
    header("location:profile.php");
}

$smarty->display("Login.tpl");



