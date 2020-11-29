<!-- 新增發票頁面 -->

  <form action="" method="post">
    <table class="table table-borderless">
      <tr>
        <td>日期:</td>
        <td><input type="date" name="date"></td>
      </tr>
      <tr>
        <td>期別:</td>
        <td>
          <select name="period">
            <option value="1">01~02</option>
            <option value="2">03~04</option>
            <option value="3">05~06</option>
            <option value="4">07~08</option>
            <option value="5">09~10</option>
            <option value="6">11~12</option>
          </select>月
        </td>
      </tr>
      <tr>
        <td>發票號碼:</td>
        <td>
          <input type="text" name="code" style="width: 30px">
          <input type="number" name="number">
        </td>
      </tr>
      <tr>
        <td>發票金額:</td>
        <td><input type="number" name="payment"></td>
      </tr>
      
    </table>
    <div class="m-3 text-center">
      <input type="submit" value="送出" class="mx-1">
      <input type="reset" value="清除" class="mx-1">
    </div>
  </form>
