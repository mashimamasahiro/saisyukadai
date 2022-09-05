<?php
//$_SESSION使うよ！
session_start();

//※htdocsと同じ階層に「includes」を作成してfuncs.phpを入れましょう！
//include "../../includes/funcs.php";
include "funcs.php";
sschk();

//1. POSTデータ取得
$credit    = filter_input( INPUT_POST, "credit" );
$qtty      = filter_input( INPUT_POST, "qtty" );
$img       = filter_input( INPUT_POST, "img" );

//2. DB接続します
$pdo = db_conn();

//３．データ登録SQL作成
$sql = "INSERT INTO gs_mpg_table(name,qtty,img)VALUES(:credit,:qtty,:img)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':credit', $credit, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':qtty', $qtty, PDO::PARAM_INT); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':img', $img, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)

$status = $stmt->execute();

//４．データ登録処理後
if ($status == false) {
    sql_error($stmt);
} else {
    //５．index.phpへリダイレクト
    header("Location: select.php");
    exit;
}
