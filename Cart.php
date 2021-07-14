<?php
include "lib.inc.php";
$smarty = includesmarty();
checkSessione();

$id_logged = $_SESSION["id"];
//prendo l'id del utente loggato
$sql_shopping_cart = "SELECT * FROM shopping_cart_item RIGHT JOIN shopping_cart ON customer_id=" . $id_logged;
//faccio il join con le due tabelle
$res = mysqli_query($con, $sql_shopping_cart);
//eseguo la query sul db
$resrow = array();
while ($resrow = mysqli_fetch_array($res)) {
    //scorro l'array della result
    $carts[] = $resrow;
//lo metto in un array
    $smarty->assign("carts", $carts);
    $_SESSION['cart'] = $resrow["id"];

}
$sql_pic = "SELECT pic FROM book INNER JOIN shopping_cart_item ON book.id=shopping_cart_item.book_id";
$res_pic = mysqli_query($con, $sql_pic);
while ($row = mysqli_fetch_object($res_pic))
    $data[]=array("pic"=>$row->pic);



$total_sql="SELECT ROUND(SUM(subtotal),2) FROM shopping_cart_item RIGHT JOIN shopping_cart ON customer_id=" . $id_logged;
$total_res=mysqli_query($con,$total_sql);
$total=mysqli_fetch_assoc($total_res);
$tot=$total["ROUND(SUM(subtotal),2)"];


$smarty->assign("books", $data);
$smarty->assign("total",$tot);
$smarty->display("Cart.tpl");








