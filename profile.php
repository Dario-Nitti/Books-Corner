<?php
include "lib.inc.php";
$user = htmlspecialchars($_SESSION['user'], ENT_QUOTES, 'UTF-8');

$smarty=includesmarty();
$smarty->assign("user",$user);
$smarty->display("Profile.tpl");

