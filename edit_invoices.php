<?php
//發票編輯功能
include_once "base.php";

$sql="select * from invoices where `id`={$_GET['id']}";
$inv=$pdo->query($sql)->fetch();

?>

<form action="update_invoices.php" method="post">
  <div>
    <input type="hidden" name="id" value="<?=$inv['id'];?>">
    <!-- 取得id，但不顯示 -->
  </div>
  <div>
    發票號碼:
    <input type="text" name="code" value="<?=$inv['code'];?>" style="width:30px">
    <input type="text" name="number" value="<?=$inv['number'];?>">
  </div>
  <div>
    發票金額:
    <input type="number" name="payment" value="<?=$inv['payment'];?>">
  </div>
  <div>
    消費日期:
    <input type="date" name="date" value="<?=$inv['date'];?>">
  </div>
  <div>
    <input type="submit" value="修改">
    <input type="reset" value="重置">
  </div>
</form>