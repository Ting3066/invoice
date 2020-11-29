<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300&display=swap" rel="stylesheet">  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>
  <div class="d-lg-none">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>


  <div class="">
    <div class="d-flex justify-content-center mx-3 py-4 row">
      <div class="col-lg-2"></div>
      <h2 class="col-lg-7 col-12 text-center"><a href="index.php" class="title text-muted font-weight-bolder">統一發票對獎系統</a></h2>
    </div>
    
    <!-- 在解析度992px以下不會出現，連結的頁面會以include方式出現在同一視窗內 -->
    <div class="mx-3 row d-flex justify-content-center">
      <div class="col-12 d-flex justify-content-center">
        <div class="col-2 d-none d-lg-block">
          <a href="index.php"><button type="button" class="btn btn-lg btn-block btn-outline-secondary my-1">首頁</button></a>
          <a href="?do=add_invoices.php"><button type="button" class="btn btn-lg btn-block btn-outline-secondary my-1">新增發票</button></a>
          <a href="?do=edit_invoices.php"><button type="button" class="btn btn-lg btn-block btn-outline-secondary my-1">發票管理</button></a>
          <a href="?do=award_numbers_list.php"><button type="button" class="btn btn-lg btn-block btn-outline-secondary my-1">獎號清單</button></a>
          <a href="?do=reward.php"><button type="button" class="btn btn-lg btn-block btn-outline-secondary my-1">對獎</button></a>
        </div>
        <div class="col-7 border rounded" style="height:80vh">
        <?php

        //在需要顯示在此區的網頁網址加上 ?do=....
        //判斷 isset($_GET['do'])
        //若成立則是用include帶入，並顯示在這個區域
        //若不成立則顯示一開始的main.php內容
        if(isset($_GET['do'])){
          include_once $_GET['do'];
        }else{
          include_once "main.php";
        }
        ?>
        </div>
      </div>
      
    </div>
  </div>





</body>

</html>




