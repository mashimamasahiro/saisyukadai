<?php
session_start();
include("funcs.php");
sschk();
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_mpg_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false) {
  sql_error($stmt);
}else{
  while( $r = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view .= '<p>';
    $view .= '<img src="upload/'.$r["img"].'" width="100">';
    $view .= "　";
    if($_SESSION["kanri_flg"]=="1"){
      $view .= '<a class="btn btn-danger" href="delete.php?id='.$r["id"].'">';
      $view .= '[<i id="retire" class="glyphicon glyphicon-remove"></i>償却]';
      $view .= '</a>';
    }
    $view .= "　".$r["qtty"]."MT"."　　".$r["name"]." ".$r["type"];
    $view .= '</a>';
    $view .= "　";
    $view .= '</p>';
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>マイページ</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<?php include("menu.php"); ?>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
  <h>ようこそ！あなたのカーボンクレジットを管理します。</h><br>
  <h>【償却】するとクレジット数量分が排出量からオフセットされます。</h>


    <div>
      <input type="text" id="keyword">
      <button id="send">検索</button>
      <input type="button" value="クリア" onclick="window.location.reload();" />
    </div>
    <div class="container jumbotron" id="view"><p>保有クレジット一覧</p><?=$view?></div>
</div>
<!-- Main[End] -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>




<script>
//登録ボタンをクリック
$("#send").on("click", function() {
    //axiosでAjax送信
    //Ajax（非同期通信）
    const params = new URLSearchParams();
    params.append('keyword',   $("#keyword").val());
    
    //axiosでAjax送信
    axios.post('select2.php',params).then(function (response) {
        console.log(typeof response.data);//通信OK
        if(response.data){
          //>>>>通信でデータを受信したら処理をする場所<<<<
          document.querySelector("#view").innerHTML=response.data;
          
        }
    }).catch(function (error) {
        console.log(error);//通信Error
    }).then(function () {
        console.log("Last");//通信OK/Error後に処理を必ずさせたい場合
    });
});


$("#retire").on("click", function confirm_test() {
  var select = confirm("本当に償却しますか？償却後クレジット数量分排出削減されます。");
      return select;
});
</script>

</body>
</html>
