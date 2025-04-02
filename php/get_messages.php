<?php
require './../php/db_connect.php'; // 先ほど作成した接続ファイルを読み込む

$sql = "SELECT * FROM messages ORDER BY day DESC";
$stmt = $pdo->query($sql);
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($messages as $message) {
    echo "<h3>{$message['name']} ({$message['day']})</h3>";
    echo "<p>{$message['news']}</p><hr>";
}
?>