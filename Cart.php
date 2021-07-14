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
}
$sql_id = "SELECT book_id FROM shopping_cart_item RIGHT JOIN shopping_cart ON customer_id=" . $id_logged;
$res_id = mysqli_query($con, $sql_id);
$row = array();
while ($row = mysqli_fetch_row($res_id))
    $id[] = $row;

foreach ($id as $value){
    $value = implode(" ", $value);
    $sql_book = "SELECT pic FROM book WHERE id =" . $value;
    $result = mysqli_query($con, $sql_book);
    $row_pic=array();
    while ($row_pic = mysqli_fetch_assoc($result))
        print_r($row_pic);
//$smarty->assign("books", $row_pic);
}


$smarty->display("Cart.tpl");








