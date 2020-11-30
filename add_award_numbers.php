<!-- 新增獎號頁面 -->

<form action="insert_award_numbers.php" method="post" class="container">
  <table class="table table-sm table-bordered">
    <tbody>
      <tr>
        <th>年月份</th>
        <td>
          <span>
            <input type="number" name="year" min="<?=date("Y")-1;?>" max="<?=date("Y")+1;?>" required>年
          </span>
          <span>
            <select name="period">
              <option value="1">1~2</option>
              <option value="2">3~4</option>
              <option value="3">5~6</option>
              <option value="4">7~8</option>
              <option value="5">9~10</option>
              <option value="6">11~12</option>
            </select>月
          </span>
        </td>
      </tr>
      <tr>
        <th rowspan=2>特別獎</th>
        <td class="number">
          <input type="number" name="special_prize" min="00000001" max="99999999">
        </td>
      </tr>
      <tr>
        <td>同期統一發票收執聯8位數號碼與特別獎號碼相同者獎金1,000萬元</td>
      </tr>
      <tr>
        <th rowspan=2>特獎</th>
        <td class="number">
          <input type="number" name="grand_prize" min="00000001" max="99999999">
        </td>
      </tr>
      <tr>
        <td>同期統一發票收執聯8位數號碼與特獎號碼相同者獎金200萬元</td>
      </tr>
      <tr>
        <th rowspan=2>頭獎</th>
        <td class="number">
          <!-- 因頭獎有3組號碼，所以將name設為陣列型式，以便將3組獎號存入陣列中 -->
          <input type="number" name="first_prize[]" min="00000001" max="99999999">
          <input type="number" name="first_prize[]" min="00000001" max="99999999">
          <input type="number" name="first_prize[]" min="00000001" max="99999999">
        </td>
      </tr>
      <tr>
        <td>同期統一發票收執聯8位數號碼與頭獎號碼相同者獎金20萬元</td>
      </tr>
      <tr>
        <th>增開六獎</th>
        <td class="number">
          <!-- 因增開六獎有1-3組號碼不等，所以將name設為陣列型式，以便將獎號存入陣列中 -->
          <input type="number" name="add_six_prize[]" min="001" max="999">
          <input type="number" name="add_six_prize[]" min="001" max="999">
          <input type="number" name="add_six_prize[]" min="001" max="999">
        </td>
      </tr>
      
    </tbody>
  </table>
  <div class="text-center">
    <button type="submit" class="btn btn-primary">儲存</button>
    <button type="reset" class="btn btn-warning">清空</button>
  </div>

</form>