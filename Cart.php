<?php
include "lib.inc.php";
$smarty = includesmarty();
checkSessione();
$smarty->display("Cart.tpl");
