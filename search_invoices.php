<?php
//發票管理頁面可以選擇要查詢的期別獎號，並將查詢的值傳到此程式中


//導回發票管理頁面，並將傳來的值設至網址的參數中
//當回到發票管理頁面時，因符合 isset($_GET['pd']) && isset($_GET['year']) 的條件，而將此設為預設值並顯示獎號
header("location:index.php?do=invoices_list.php&pd=".$_POST['period']."&year=".$_POST['year']);


?>