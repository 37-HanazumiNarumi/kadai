<?php
$id = $_POST["id"];
$news_title = $_POST["news_title"];
$news_detail = $_POST["news_detail"];
$author = $_POST["author"];

$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "UPDATE enq set news_title = '" . $news_title . "', news_detail = '" . $news_detail . "', author = " . $author . ", update_date = sysdate() " . "WHERE id = " . $id;
var_dump($sql);
$stmt = $pdo->prepare($sql);
$result = $stmt->execute();
var_dump($result);
if($result) {
	echo "データが更新できました";
	echo "<a href=news_list.php>一覧へ</a>";
} else {
	echo "データの登録に失敗しました";
    echo "<a href=news_list.php>一覧へ</a>";
}
$pdo = null;
?>
<html>
<head>
</head>
<body>
</body>
</html>