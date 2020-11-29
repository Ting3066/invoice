<?php
//發票管理頁面
include_once "base.php";

$sql="select * from invoices";
$invs=$pdo->query($sql)->fetchALL();

?>

<table class="table table-borderless text-center text-muted font-weight-bold">
  <tr>
    <td>發票號碼</td>
    <td>發票金額</td>
    <td>消費日期</td>
    <td>管理</td>
  </tr>

  <?php
  foreach($invs as $inv){
  
  ?>
  <tr>
    <td><?=$inv['code'].$inv['number'];?></td>
    <td><?=$inv['payment'];?></td>
    <td><?=$inv['date'];?></td>
    <td>
      <button class="btn btn-sm btn-success">
        <a href="" class="text-decoration-none text-light">編輯</a>
      </button>
      <button class="btn btn-sm btn-danger">
        <a href="" class="text-decoration-none text-light">刪除</a>
      </button>
    </td>
  </tr>
  <?php
  }

  ?>
</table>