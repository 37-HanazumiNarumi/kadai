<?php
$news_title = $_POST["news_title"];
$news_detail = $_POST["news_detail"];
$author = $_POST["author"];

$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "INSERT INTO news (id, news_title, news_detail, author, create_date, update_date) VALUES (NULL, '" . $news_title . "', '" . $news_detail . "', " . $author . ", sysdate(), sysdate()) ";
var_dump($sql);
//実行準備
$stmt = $pdo->prepare($sql);
//executeで実行
//登録できたかどうかを判定する為に$result
$result = $stmt->execute();
var_dump($result);
if($result) {
	echo "データが登録できました";
	echo "<a href=news.list.php>一覧へ</a>";
} else {
	echo "データの登録に失敗しました";
    echo "<a href=index.php>index</a>";
}
$pdo = null;
?>
<html>
<head>
</head>
<body>
</body>
</html>