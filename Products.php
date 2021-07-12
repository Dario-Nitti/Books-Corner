<?php
include "lib.inc.php";

$smarty = includesmarty();
$category_id = $_GET["id_category"];
$smarty->assign("categoria", 'Avventura');
$avventura = "SELECT * FROM book";
$result = mysqli_query($con, $avventura);
$book=array();
while ($book = mysqli_fetch_array($result)) {
    $books[] = $book;
}

$smarty->assign("books", $books);


$smarty->display("Products.tpl");