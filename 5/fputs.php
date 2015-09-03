<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $sex = $_POST["sex"];
    $hobby = $_POST["hobby"];

    $str = $name.",".$age.",".$email.",".$sex.",".$hobby."¥n";

    $file = fopen("./data/data.csv","a");
    flock($file, LOCK_EX);
    flock($file, $str);
    flock($file, LOCK_UN);
    fclose($file);
?>
</body>
</html>