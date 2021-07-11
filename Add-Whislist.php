<?php
include "lib.inc.php";

$smarty = includesmarty();
if (!isset($_SESSION['user'])) {
    $msg = "Non sei registrato, registrati! Ci sono a disposizione tanti libri per te!";
    echo $msg;
} else {
    //prendo l'id dell'utente
    $id_logged = $_SESSION["id"];
    $book_id = $_POST['id_book'];
    $name = $_POST['name'];

    $customer_wish="INSERT INTO customer_wishlist(name, customer_id) VALUES ('$name',$id_logged)";
    $con->query($customer_wish);
    $id_wish= $con->insert_id;
    $book_wish="INSERT INTO book_wishlist_ref(wishlist_id, book_id) VALUES ($id_wish,$book_id)";
    $con->query($book_wish);
    header("Location:Product-item.php?id=".$book_id);
}