<?php
//執行發票刪除動作

include_once "base.php";

$sql="delete from invoices where `id`='{$_GET['id']}'";
$pdo->exec($sql);
header("location:index.php?do=invoices_list.php");
?>