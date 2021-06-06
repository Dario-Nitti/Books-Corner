<?php

include "lib.inc.php";
$smarty = includesmarty();

if (!isset($_SESSION['user'])){
    $smarty->display("Login.tpl");
    exit;
}else{
    header("Location:profile.php");
}














