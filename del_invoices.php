<!-- 確認是否刪除發票資料 -->

  <div>確定要刪除此筆資料嗎?
    <button>
      <a href="del.php?id=<?=$_GET['id'];?>" class="text-decoration-none">確定</a>
      <!-- 若確定刪除，引導至del.php進行刪除動作 -->
    </button>
    <button>
      <a href="index.php?do=invoices_list.php" class="text-decoration-none">取消</a>
      <!-- 取消則回到當期發票 -->

    </button>
  </div>
