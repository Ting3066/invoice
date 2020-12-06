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
  $sum=0;
  if(!empty($invoices) && !empty($awards)){
    echo "<table class='w-75 table table-striped text-center text-muted'>";
    echo "<tr class='bg-secondary text-light'>";
    echo "<th>";
    echo "中獎發票";
    echo "</th>";
    echo "<th>";
    echo "獎項";
    echo "</th>";
    echo "<th>";
    echo "中獎金額";
    echo "</th>";
    echo "</tr>";
    
    foreach($invoices as $inv){
      foreach($awards as $award){
        switch($award['type']){
          case 1: //特別獎，號碼全中
            if($award['number']==$inv['number']){
              echo "<tr>";
              echo "<td>";
              echo $inv['code'].$inv['number'];
              echo "</td>";
              echo "<td>";
              echo "特別獎";
              echo "</td>";
              echo "<td>";
              echo "10,000,000";
              echo "</td>";
              echo "</tr>";
              $all_res=1;
              $sum=$sum+10000000;
            }
          break;
          case 2: //特獎，號碼全中
            if($award['number']==$inv['number']){
              echo "<tr>";
              echo "<td>";
              echo $inv['code'].$inv['number'];
              echo "</td>";
              echo "<td>";
              echo "特獎";
              echo "</td>";
              echo "<td>";
              echo "2,000,000";
              echo "</td>";
              echo "</tr>";
              $all_res=1;
              $sum=$sum+2000000;
            }
          break;
          case 3: //頭獎，依中獎號碼數決定獎項
            $res=-1;
            for($i=5;$i>=0;$i--){
              $target=mb_substr($award['number'],$i,(8-$i),'utf8');
              $mynumber=mb_substr($inv['number'],$i,(8-$i),'utf8');
              if($target==$mynumber){
                  switch($i){
                    case 5: //六獎
                      $money=200;
                    break;
                    case 4: //五獎
                      $money=1000;
                    break;
                    case 3: //四獎
                      $money=4000;
                    break;
                    case 2: //三獎
                      $money=10000;
                    break;
                    case 1: //二獎
                      $money=40000;
                    break;
                    case 0: //頭獎
                      $money=200000;
                    break;
                  }
                $res=$i;
              }else{
                break;
              }
            }
  
            //判斷最後中的獎項
            $awardStr=['頭','二','三','四','五','六'];
            if($res!=-1){
              // echo "恭喜你!發票號碼".$inv['code'].$inv['number']."中了{$awardStr[$res]}獎，獎金".$money."元<br>";
              echo "<tr>";
              echo "<td>";
              echo $inv['code'].$inv['number'];
              echo "</td>";
              echo "<td>";
              echo $awardStr[$i]."獎";
              echo "</td>";
              echo "<td>";
              echo number_format($money);
              echo "</td>";
              echo "</tr>";
              $all_res=1;
              $sum=$sum+$money;
            }
          break;
          case 4:
            if($award['number']==mb_substr($inv['number'],5,3,'utf8')){
              // echo "恭喜你!發票號碼".$inv['code'].$inv['number']."中了增開六獎，獎金200元<br>";
              echo "<tr style='border-bottom:2px solid'>";
              echo "<td>";
              echo $inv['code'].$inv['number'];
              echo "</td>";
              echo "<td>";
              echo "增開六獎";
              echo "</td>";
              echo "<td>";
              echo "200";
              echo "</td>";
              echo "</tr>";
              $all_res=1;
              $sum=$sum+200;
            }
  
  
        }
      }
      
    }
    if($all_res==-1){
      echo "</table>";
      echo "很可惜，都沒有中獎";
    }else{
      echo "<tr>";
      echo "<th colspan=2>總計</th>";
      echo "<th>".number_format($sum)."</th>";
      echo "</tr>";
    }
    echo "</table>";
  
  }else{
    if(empty($invoices)){
      echo "<span class='text-muted font-weight-bolder'>沒有需要對獎的發票號碼<span>";
    }else if(empty($awards)){
      echo "<span class='text-muted font-weight-bolder'>尚未開獎，或者還沒輸入獎號!<span>";
    }
  }
  







?>