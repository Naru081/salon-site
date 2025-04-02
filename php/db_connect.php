<?php
function getDatabaseConnection() {
    $servername = "localhost";  // MySQLサーバー
    $username = "mydbuser";     // 作成したユーザー
    $password = "uB9kdA2";      // 設定したパスワード
    $dbname = "mydb";           // データベース名 

    try {
        // MySQLに接続
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        // エラーモードを例外に設定
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("接続失敗: " . $e->getMessage());
    }
}
?>