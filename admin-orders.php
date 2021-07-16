<?php
include "lib.inc.php";
$smarty=includesmarty();

$sql_admin_orders="SELECT * FROM order_item INNER JOIN book ON book.id=order_item.book_id INNER JOIN customer";
$res= mysqli_query($con,$sql_admin_orders);
$resrow=array();
while ($resrow = mysqli_fetch_array($res)) {
    $data[]=$resrow;
    $smarty->assign("orders",$data);
}
$smarty->display("admin-orders.tpl");