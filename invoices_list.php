<?php
//發票管理頁面
include_once "base.php";

$sql="select * from invoices";
$invs=$pdo->query($sql)->fetchALL();

?>

<table class="table table-borderless table-hover text-center text-muted" style="width:90%">
  <tr class="font-weight-bolder bg-secondary text-light">
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
      <button class="btn btn-sm btn-primary">
        <a href="?do=edit_invoices.php&id=<?=$inv['id'];?>" class="text-decoration-none text-light"><i class="fas fa-edit"></i></a>  <!-- 發票編輯功能 -->
      </button>
      <button class="btn btn-sm btn-danger">
        <a href="?do=del_invoices.php&id=<?=$inv['id'];?>" class="text-decoration-none text-light"><i class="fas fa-trash-alt"></i></a> <!-- 發票刪除功能 -->
      </button>
    </td>
  </tr>
  <?php
  }

  ?>
</table>

<!-- <nav>
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#">&laquo;</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">&raquo;</a>
    </li>
  </ul>
</nav> -->