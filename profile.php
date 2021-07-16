<?php
include "lib.inc.php";

$smarty = includesmarty();
$id_logged = $_SESSION["id"];
$sql = "SELECT * FROM customer WHERE id=" . $id_logged;
$result = mysqli_query($con, $sql);
$user = mysqli_fetch_array($result);



$book_sql = "SELECT * FROM book INNER JOIN customer_wishlist ON customer_wishlist.book_id=book.id WHERE customer_wishlist.customer_id=".$id_logged;
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
