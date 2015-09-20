<?php
$id = $_GET["id"];
$news_title;
$news_detail;
$author;
$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "SELECT * FROM news WHERE news_id = " . $id;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($results);
foreach($results as $row) {
//	var_dump($row);
	$news_title = $row["news_title"];
	$news_detail = $row["news_detail"];
	$author = $row["author"];
}
$pdo = null;
?>
<html>
<head>
</head>
<body>
<form action="update_execute.php" method="post">
	ニュース: <input type="text" name="news_title" value="<?php echo $news_title ?>" />
	内容: <input type="text" name="news_detail" value="<?php echo $news_detail ?>" />
    作者: <input type="text" name="author" value="<?php echo $author ?>" />
	<input type="hidden" name="news_id" value="<?php echo $news_id ?>" />
	<input type="submit" value="更新" />
</form>

</body>
</html>