<?php
include "lib.inc.php";

$smarty = includesmarty();
$id_logged = $_SESSION["id"];
$sql = "SELECT * FROM customer WHERE id=" . $id_logged;
$result = mysqli_query($con, $sql);
$user = mysqli_fetch_array($result);

$sql_wishlist = "SELECT * FROM customer_wishlist WHERE customer_id=" . $id_logged;
$result_wish = mysqli_query($con, $sql_wishlist);
$resrow = mysqli_fetch_object($result_wish);
$resrow["book_id"];

$book_sql = "SELECT * FROM book WHERE id=" . $resrow["book_id"];
$result_book = mysqli_query($con, $book_sql);
if (!$result_book) {
    $smarty->assign("books", "");
} else {
    $res = array();
    while ($res = mysqli_fetch_array($result_book)) {
        $resrowbook[] = $res;
        $smarty->assign("books", $resrowbook);

    }
}


$smarty->assign("user", $user);
$smarty->display("Profile.tpl");
