
    


<?php include("header.php"); ?>
<?php 

//1.接続します
$link = mysql_connect('localhost','root','');

//2.データベース選択
mysql_select_db("cs_academy", $link);

//3.DB文字コードを指定
mysql_set_charset("utf8", $link);

//4.SELECT * FROM テーブル名；
$sql = "SELECT * FROM news limit 5;";

//5.SQLを実行する関数
$result = mysql_query($sql, $link);

//6.SQL実行し、取得したデータを表示
echo "<dl class='clearfix'>";
while($row = mysql_fetch_assoc($result)){
    echo "<tr>";
    echo "<dt class='news-date'>".$row["create_date"]."</dt>";
    echo "<dd class='news-description'>".$row["news_title"]."</dd>";
    //echo "<td>".$row["news_detail"]."</td>";
    echo "</tr>";
}
echo "</dl>"
    
?>
</body>
</html>