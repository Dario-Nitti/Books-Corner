<?php
include "lib.inc.php";
$smarty = includesmarty();
if (!isset($_SESSION['user'])) {
    $msg = "Non sei registrato, registrati! Ci sono a disposizione tanti libri per te!";
    echo $msg;
} else {
    //prendo l'id dell'utente
    $id_logged = $_SESSION["id"];
//lo inserisco nella tabella shopping_cart
    $cart_user = "INSERT INTO shopping_cart(customer_id) VALUES ($id_logged)";
    $con->query($cart_user);
    $id_cart = $con->insert_id;
    //prendo l'ultimo id inserito(quello sullo shopping cart)
    $quant = $_POST['quantita'];
    $price = $_POST['price'];
    $book_id = $_POST['id_book'];
    //prendo i valori nascosti per riempiere il carrello dell'utente

    $cart_item_user = "INSERT INTO shopping_cart_item(quantity, subtotal, shopping_cart_id, book_id) VALUES
                    ($quant,$price,$id_cart,$book_id)";
    $con->query($cart_item_user);
    $update_quant="UPDATE book SET quantity=quantity - $quant WHERE id=$book_id";
    $con->query($update_quant);
    //riempio il carrello dell'utente e diminuisco la quantità
header("Location:Product-item.php?id=". $book_id);
exit;
}
