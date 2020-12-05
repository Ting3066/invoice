<?php
//執行發票刪除動作

include_once "base.php";


//判斷要刪除的是發票資料還是獎號資料
if($_GET['del']=="invoices"){
  $sql="delete from invoices where `id`='{$_GET['id']}'";
  $pdo->exec($sql);
  
  header("location:index.php?do=invoices_list.php");
}else{
  $sql="delete from award_numbers where `period`='{$_GET['period']}' && `year`='{$_GET['year']}'";
  $pdo->exec($sql);
  
  header("location:index.php?do=award_numbers_list.php");
}


?>