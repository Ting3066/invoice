<?php
//對獎頁面可以選擇要查詢的期別獎號，並將查詢的值傳到此程式中


//導回對獎頁面，並將傳來的值設至網址的參數中
//當回到對獎頁面時，因符合 isset($_GET['pd']) && isset($_GET['year']) 的條件，而將此設為預設值並顯示獎號
header("location:index.php?do=award_numbers_list.php&pd=".$_POST['period']."&year=".$_POST['year']);


?>