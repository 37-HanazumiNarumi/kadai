<html>
<head>
</head>
<body>
<form action="login_execute.php" method="post">
<dl>
	<dt>ログイン名:</dt>
	<dd><input type="text" name="name" value="" /></dd>
    <dt>パスワード:</dt> 
    <dd><input type="password" name="password" value="" /></dd>
    <dt>ログイン情報の記録</dt>
    <dd>
        <input id="save" type="checkbox" name="save" value="on">
        <label for="save">次回からは自動的にログインする</label>
    </dd>
</dl>
	<input type="submit" value="ログインする"/>
	
</form>
</body>
</html>