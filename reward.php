<?php
//對獎頁面

//一次對所有發票

include_once "base.php";


//取出所有該期發票號碼
$sql_invoices="select * from invoices where period='{$_GET['pd']}' && left(date,4)='{$_GET['year']}'";
$invoices=$pdo->query($sql_invoices)->fetchALL();

//取出該期獎號
$sql_awards="select * from award_numbers where period='{$_GET['pd']}' && year='{$_GET['year']}'";
$awards=$pdo->query($sql_awards)->fetchALL();


$all_res=-1;
if(!empty($invoices) && !empty($awards)){
  foreach($invoices as $inv){
    foreach($awards as $award){
      switch($award['type']){
        case 1: //特別獎，號碼全中
          if($award['number']==$inv['number']){
            echo "恭喜你!發票號碼".$inv['number']."中了特別獎<br>";
            $all_res=1;
          }
        break;
        case 2: //特獎，號碼全中
          if($award['number']==$inv['number']){
            echo "恭喜你!發票號碼".$inv['number']."中了特獎<br>";
            $all_res=1;
          }
        break;
        case 3: //頭獎，依中獎號碼數決定獎項
          $res=-1;
          for($i=5;$i>=0;$i--){
            $target=mb_substr($award['number'],$i,(8-$i),'utf8');
            $mynumber=mb_substr($inv['number'],$i,(8-$i),'utf8');

            if($target==$mynumber){
                
              $res=$i;
            }else{
              break;
            }
          }

          //判斷最後中的獎項
          $awardStr=['頭','二','三','四','五','六'];
          if($res!=-1){
            echo "恭喜你!發票號碼=".$inv['number']."中了{$awardStr[$res]}獎<br>";
            $all_res=1;
          }
        break;
        case 4:
          if($award['number']==mb_substr($inv['number'],5,3,'utf8')){
            echo "恭喜你!發票號碼=".$inv['number']."中了增開六獎<br>";
            $all_res=1;
          }

      }
    }
  
  }
  if($all_res==-1){
    echo "很可惜，都沒有中獎";
  }

}else{
  if(empty($invoices)){
    echo "沒有需要對獎的發票號碼";
  }else if(empty($awards)){
    echo "尚未開獎，或者還沒輸入獎號!";
  }
}






?>