<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<h1>アンケート</h1>

<form action="comfirm_enq.php" method="post">
	名前: <input type="text" name="name" /><br>
	年齢: <input type="number" name="age" /><br>
	メールアドレス:　<input type="email" name="email"><br>
	性別：<input type="radio" name="sex" value="man">男性
	<input type="radio" name="sex" value="woman">女性<br>
	趣味：<input type="checkbox" name="hobby" value="movie">映画
	<input type="checkbox" name="hobby" value="music">音楽
	<input type="checkbox" name="hobby" value="cooking">料理
	<input type="checkbox" name="hobby" value="sport">スポーツ
	<input type="checkbox" name="hobby" value="other">その他<br>
	

	<input type="submit" value="確認"/>
</form>



</body>
</html>
