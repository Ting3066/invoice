<?php
//獎號清單頁面
include_once "base.php";

$sql="select * from award_numbers";
$award_numbers=$pdo->query($sql)->fetchALL();

?>
<div class="d-flex flex-column">
  
<form action="" class="container" method="post">
  <table class="table table-sm table-bordered">
    <tbody>
      <tr>
        <th>年月份</th>
        <td>
          <select name="" id="">
            <option value="1">1-2</option>
            <option value="2">3-4</option>
            <option value="3">5-6</option>
            <option value="4">7-8</option>
            <option value="5">9-10</option>
            <option value="6">11-12</option>
          </select>月
          <input type="submit" value="查詢">
        </td>
      </tr>
      <tr>
        <th rowspan=2>特別獎</th>
        <td></td>
      </tr>
      <tr>
        <td>同期統一發票收執聯8位數號碼與特別獎號碼相同者獎金1,000萬元</td>
      </tr>
      <tr>
        <th rowspan=2>特獎</th>
        <td></td>
      </tr>
      <tr>
        <td>同期統一發票收執聯8位數號碼與特獎號碼相同者獎金200萬元</td>
      </tr>
      <tr>
        <th rowspan=5>頭獎</th>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td>同期統一發票收執聯8位數號碼與頭獎號碼相同者獎金20萬元</td>
      </tr>
      <tr>
        <th rowspan=5>增開六獎</th>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
    </tbody>
  </table>
</form>
  <button class="btn btn-primary mx-auto">
    <a href="" class="text-light">對獎</a>
  </button>
</div>
