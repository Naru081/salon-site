<?php
// データベース接続ファイルを読み込み
require_once __DIR__ . '/db_connect.php';

// データベース接続を取得
$pdo = getDatabaseConnection();

// データ取得クエリ
$query = "SELECT * FROM messages";
$stmt = $pdo->prepare($query);
$stmt->execute();

// 結果を取得
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($messages);
?>