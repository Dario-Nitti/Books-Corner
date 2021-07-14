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
while ($resrow = mysqli_fetch_object($res)) {
    //scorro l'array della result
    $quantita=$resrow->quantity;
//lo metto in un array

}
$sql_pic = "SELECT * FROM book INNER JOIN shopping_cart_item ON book.id=shopping_cart_item.book_id";
$res_pic = mysqli_query($con, $sql_pic);
while ($row = mysqli_fetch_object($res_pic)) {
    $data[] = array("id"=>$row->id,"titolo"=>$row->title,"pic"=>$row->pic);

}

$total_sql="SELECT ROUND(SUM(subtotal),2) FROM shopping_cart_item RIGHT JOIN shopping_cart ON customer_id=" . $id_logged;
$total_res=mysqli_query($con,$total_sql);
$total=mysqli_fetch_assoc($total_res);
$tot=$total["ROUND(SUM(subtotal),2)"];

$sql="SELECT * FROM customer_address WHERE customer_id=".$id_logged;
$result = mysqli_query($con,$sql);
$address=array();
while ($address = mysqli_fetch_array($result)) {
    $addresses[] = $address;
    $smarty->assign("addresses",$addresses);

}


$smarty->assign("books",$data);
$smarty->assign("total",$tot);
$smarty->display("Checkout.tpl");