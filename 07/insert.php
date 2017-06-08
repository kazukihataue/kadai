
<?php
//var_dump($_POST);
//1. POSTデータ取得
$year   =$_POST["year"];
$month   =$_POST["month"];
$day   =$_POST["day"];
$club   =$_POST["club"];
$type   =$_POST["type"];
$adress   =$_POST["adress"];


//2. DB接続します
try {
  $pdo = new PDO('mysql:dbname=gs_db33;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(year, month, day, club,type, adress )VALUES(:year, :month, :day, :club, :type, :adress)");
$stmt->bindValue(':year', $year, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':month', $month, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':day', $day, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':club', $club, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':type', $type, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':adress', $adress, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
//  header("Location: kadai7.php");
//  exit;

}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta http-equiv="refresh"content="2; url=kadai7.php">
</head>
<body>
    <div>GOOOOOOOOOOOOOOOOO!</div>
    <div>明日も口説きに行こう！</div>
    
</body>
</html>