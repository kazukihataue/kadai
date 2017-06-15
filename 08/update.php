<?php
//1.POSTでParamを取得
$id = $_POST["id"];
$name = $_POST["name"];
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

//2.DB接続など
try {
  $pdo = new PDO('mysql:dbname=gs_db33;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//3.UPDATE gs_an_table SET ....; で更新(bindValue)
//　基本的にinsert.phpの処理の流れです。
$update = $pdo->prepare("UPDATE gs_user_table SET name=:name, lid=:lid, lpw=:lpw WHERE id=:id");
$update ->bindValue(':id', $id, PDO::PARAM_INT);
$update ->bindValue(':name', $name, PDO::PARAM_STR);
$update ->bindValue(':lid', $lid , PDO::PARAM_STR);
$update ->bindValue(':lpw', $lpw , PDO::PARAM_STR);
$status = $update->execute();

//4.データ表示
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $update->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
    header("Location: select.php");
    exit;
}


?>
