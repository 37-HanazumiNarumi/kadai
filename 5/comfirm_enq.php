<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>データ確認</title>
</head>
<body>
    <h!>確認画面</h!><br>
    
    <?php 
    session_start(); 
    if(isset($_POST['name'])){
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['age'] = $_POST['age'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['sex'] = $_POST['sex'];
        $_SESSION['hobby'] = $_POST['hobby'];
    }
    ?>
    
    <p>名前：<?php echo $_POST['name']; ?></p>
    <p>年齢：<?php echo $_POST['age']; ?></p>
    <p>メール：<?php echo $_POST['email']; ?></p>
    <p>性別：<?php echo $_POST['sex']; ?></p>
    <p>趣味：<?php echo $_POST['hobby']; ?></p>
        
    <form action="input_finish.php"."fputs.php" method="post">
    <input type="submit" value="データ送信">
    </form>

</body>
</html>