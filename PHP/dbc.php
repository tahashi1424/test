<?php 

// MySQLの接続情報をセット
$db = 'mysql:host=localhost;dbname=cafe';
$user = 'root';
$pass = 'jackall.1417';

//接続のテスト
try {
    $pdo = new PDO($db, $user, $password);
    echo "接続に成功しました";
} catch (PDOException $e) {
    echo "接続に失敗しました";
    exit();
}

  //次のステップの時にここにSQLを書く
echo "PHP";
?>