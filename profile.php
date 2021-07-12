<?php
include "lib.inc.php";

$smarty=includesmarty();
$id_logged = $_SESSION["id"];
$sql="SELECT * FROM customer WHERE id=".$id_logged;
$result = mysqli_query($con, $sql);
$user=mysqli_fetch_array($result);

$smarty->assign("user",$user);
$smarty->display("Profile.tpl");

