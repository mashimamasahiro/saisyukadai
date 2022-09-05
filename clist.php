<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>商品一覧</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<?php include("menu.php"); ?>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
<section>
    <h2 class="fontsize30 green padding3030 margin-center" id="News">商品一覧</h2>
    <p class="fontsize14 margin-below60"></p>

    <!-- １段目横並びに貼り付け -->
    <p class="fontsize18 margin-below30 margin-center">Jクレジット</p>
    <ul class="news-list">
      <li class="news-item">
        <img src="upload/4.png" alt="Jクレジット">
        <p class="fontsize16 padding3030">再生可能エネルギー</p>
        <p class="fontsize14 margin-below10">　　　1,500円/MT　　　<button id="buy1" class="btn019">購入</button></p>
        <p class="fontsize14 margin-below60"></p>
      </li>

      <li class="news-item">
        <img src="upload/4.png" alt="Jクレジット">
        <p class="fontsize16 padding3030">森林吸収</p>
        <p class="fontsize14 margin-below10">　　　5,000円/MT　　　<button id="buy2" class="btn019">購入</button></p>
        <p class="fontsize14 margin-below60"></p>
      </li>
      
      <li class="news-item">
        <img src="upload/4.png" alt="Jクレジット">
        <p class="fontsize16 padding3030">ブルーカーボン</p>
        <p class="fontsize14 margin-below10">　　　15,000円/MT　　　<button id="buy3" class="btn019">購入</button></p>
        <p class="fontsize14 margin-below60"></p>
      </li>
    </ul>

    
     <!-- １段目横並びに貼り付け -->
     <p class="fontsize14 margin-below120"></p>
     <p class="fontsize18 margin-below30 margin-center">ボランタリークレジット</p>
    <ul class="news-list">
      <li class="news-item">
        <img src="upload/5.png" alt="VERRA">
        <p class="fontsize16 padding3030">VCS (CORSIA)</p>
        <p class="fontsize14 margin-below10">　　　$5/MT　　　<button id="buy4" class="btn019">購入</button></p>
        <p class="fontsize14 margin-below60"></p>
      </li>

      <li class="news-item">
        <img src="upload/5.png" alt="VERRA">
        <p class="fontsize16 padding3030">VCS (NGO)</p>
        <p class="fontsize14 margin-below10">　　　$15/MT　　　<button id="buy5" class="btn019">購入</button></p>
        <p class="fontsize14 margin-below60"></p>
      </li>
      
      <li class="news-item">
        <img src="upload/6.png" alt="GS">
        <p class="fontsize16 padding3030">GS (CORSIA)</p>
        <p class="fontsize14 margin-below10">　　　$5/MT　　　<button id="buy6" class="btn019">購入</button></p>
        <p class="fontsize14 margin-below60"></p>
      </li>
    </ul>

 <!-- 戻るボタン挿入 -->
<div id="mpgbtn" class="margin-below60"><a>←BACK</a></div>
<p class="fontsize16 margin-below30"></p>
  

</div>
<footer>
    <div class="margin-center fontsize16 padding3030 back1 white">
      <small>copyrights 2022 MASHIMASHI Project All RIghts Reserved.</small>
    </div>
</footer>

<!-- Main[End] -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    document.getElementById("mpgbtn").onclick = function () {
      location.href = 'http://localhost/ae/select.php';
    }

    document.getElementById("buy1").onclick = function () {
      location.href = 'http://localhost/ae/buy.php';
    }
    document.getElementById("buy2").onclick = function () {
      location.href = 'http://localhost/ae/buy2.php';
    }
    document.getElementById("buy3").onclick = function () {
      location.href = 'http://localhost/ae/buy3.php';
    }
    document.getElementById("buy4").onclick = function () {
      location.href = 'http://localhost/ae/buy4.php';
    }
    document.getElementById("buy5").onclick = function () {
      location.href = 'http://localhost/ae/buy5.php';
    }
    document.getElementById("buy6").onclick = function () {
      location.href = 'http://localhost/ae/buy6.php';
    }
 </script>

</body>
</html>
