<?php
session_start();
include("funcs.php");
sschk();
$pdo = db_conn();

$keyword = $_POST['keyword'];

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_mpg_table WHERE name LIKE :keyword");
$stmt->bindValue(':keyword', '%'.$keyword.'%', PDO::PARAM_STR); 
$status = $stmt->execute();


//３．データ表示
$view="<検索結果>";
if($status==false) {
  sql_error($stmt);
}else{
  while( $r = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view .= '<p>';
    $view .= '<img src="upload/'.$r["img"].'" width="100">';
    $view .= "　";
    if($_SESSION["kanri_flg"]=="1"){
      $view .= '<a class="btn btn-danger" href="delete.php?id='.$r["id"].'">';
      $view .= '[<i class="glyphicon glyphicon-remove"></i>償却]';
      $view .= '</a>';
    }
    $view .= "　".$r["qtty"]."MT"."　　".$r["name"]." ".$r["type"];
    $view .= '</a>';
    $view .= "　";
    $view .= '</p>';
  }
}

echo $view;
?>

