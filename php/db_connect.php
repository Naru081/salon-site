<?php
function getDatabaseConnection() {
    $servername = "mysql321.phy.lolipop.lan";
    $username = "LAA1661715";
    $password = "Ub4CHy2";
    $dbname = "LAA1661715-mydb";

    try {
        // ソケットではなくホスト名経由で接続
        $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8mb4";
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo "データベース接続に失敗しました: " . $e->getMessage();
        exit;
    }
}
?>