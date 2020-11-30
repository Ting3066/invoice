<?php
//將輸入的發票資料寫入資料庫

include_once "base.php";

$sql="insert into invoices(`date`,`code`,`period`,`payment`,`number`) values('{$_POST['date']}','{$_POST['code']}','{$_POST['period']}','{$_POST['payment']}','{$_POST['number']}')";
$pdo->query($sql);

header("location:index.php?do=invoices_list.php");


?>