<?php
session_start();
include "funcs.php";
sschk();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>購入画面</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
    <?php include("menu.php"); ?>
    <?php echo $_SESSION["name"]; ?>さん　
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="buy_insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>　　購入カート</legend>
      <label>　クレジット：Jクレジット (再エネ)</label><br>
      <label>　　　　単価：1,500円/MT
        <input type="hidden" name="credit" value="Jクレジット (再エネ)"></label><br>
      <label>　　　　数量：<input type="number" name="qtty">MT</label><br>
      <div hidden>
      <label>　　　　img：<input type="text" name="img" value="4.png"></label>
      </div><br>
      <a>　　　</a><input id="buy0" type="submit" value="購入">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    document.getElementById("buy0").onclick = function confirm_test() {
      var select = confirm("購入しますか？確認後、請求書を送付します。");
      return select;
    }
 </script>

</body>
</html>
