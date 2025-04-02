<?php
$host = "localhost"; 
$dbname = "mydb";    // データベース名
$username = "mydbuser";  // ユーザー名
$password = "nd2Ur3Cr"; // パスワード

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("データベース接続エラー: " . $e->getMessage());
}
?>
