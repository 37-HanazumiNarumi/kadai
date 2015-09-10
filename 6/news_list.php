<?php include("header.php"); ?>

<?php 
$pdo = new PDO('mysql:host=localhost;dbname=cs_academy;charset=utf8','root','');
$sql = "SELECT*FROM news";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchALL(PDO::FETCH_ASSOC);
var_dump($result);
$pdo = null;
?>






<?php include("footer.php"); ?>