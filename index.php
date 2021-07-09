<?php
include "lib.inc.php";
$smarty = includesmarty();
//$sql = "SELECT * FROM book ORDER BY rand() limit 5";
////$result = mysqli_query($sql);
$smarty->display("Home.tpl");
//while ($resrow = mysqli_fetch_object($result))
//    $books[]=array("titolo"=>utf8_encode($resrow->titolo),img);
//$smarty->assign("books",$books);
$smarty->display("index.tpl.html");
?>
