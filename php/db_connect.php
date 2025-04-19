<?php
function getDatabaseConnection() {
    $username = "root"; // XAMPPのデフォルトユーザー
    $password = "";     // パスワード未設定（必要なら入力）
    $dbname = "mydb";   // データベース名を指定

    // ソケットパスを指定
    $socket = "/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock";

    try {
        $dsn = "mysql:unix_socket=$socket;dbname=$dbname;charset=utf8mb4";
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo "データベース接続に失敗しました: " . $e->getMessage();
        exit;
    }
}
