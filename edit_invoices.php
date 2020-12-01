<?php
//發票編輯功能
include_once "base.php";


$sql="select * from invoices";
$invs=$pdo->query($sql)->fetchALL();

?>

<form action="update_invoices.php" method="post">
  <table class="table table-borderless text-center text-muted">
    <tr class="font-weight-bolder bg-secondary text-light">
      <td>發票號碼</td>
      <td>發票金額</td>
      <td>消費日期</td>
      <td>管理</td>
    </tr>

    <?php
    foreach($invs as $inv){
      if($inv['id']==$_GET['id']){

      
    
    ?>
    <div>
      <input type="hidden" name="id" value="<?=$inv['id'];?>">
    </div>
    </tr>
    <tr class="alert-secondary">
      <td class="d-flex">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="code" value="<?=$inv['code'];?>">
          <input type="number" class="form-control" name="number" value="<?=$inv['number'];?>" style="width:80px">
        </div>
        
      </td>
      <td>
        <div class="input-group mb-3">
          <input type="number" class="form-control" name="payment" value="<?=$inv['payment'];?>">
        </div>
      </td>
      <td>
        <div class="input-group mb-3">
          <input type="date" class="form-control" name="date" value="<?=$inv['date'];?>">
        </div>
      </td>
      <td>
        <div class="d-flex">
          <button class="btn btn-sm btn-success mx-2">
            <a href="?do=update_invoices.php&id=<?=$inv['id'];?>" class="text-decoration-none text-light"><i class="fas fa-check"></i></a>  <!-- 確認編輯 -->
          </button>
          <button class="btn btn-sm btn-danger">
            <a href="?do=invoices_list.php&id=<?=$inv['id'];?>" class="text-decoration-none text-light"><i class="fas fa-times"></i></a> <!-- 取消編輯 -->
          </button>
        </div>
      </td>
    </tr>
    <?php
      }else{
    ?>
    <tr style="opacity:0.5">
      <td><?=$inv['code'].$inv['number'];?></td>
      <td><?=$inv['payment'];?></td>
      <td><?=$inv['date'];?></td>
      <td>
        <div class="d-flex">
          <button class="btn btn-sm btn-primary mx-2" disabled><i class="fas fa-edit"></i></button>
          <button class="btn btn-sm btn-danger" disabled><i class="fas fa-trash-alt"></i></button>
        </div>
      </td>
    </tr>
    <?php
      }
    }

    ?>
  </table>

</form>
