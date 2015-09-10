    <?php include("header.php"); ?>
            
    <section class="main_visual">
        <div class="inner">
            <p class="catch text-center">世界を震わすチーズを創ろう。<span class="catch-small">新しい形のチーズ職人養成学校、はじまります。</span></p>
        </div>
    </section>
    
    <section class="news contents-box">
        <h2 class="section-title text-center">
            <span class="section-title__yellow">News</span><span class="section-title-ja text-center">お知らせ・更新情報</span>
        </h2>
        <article class="news-detail">

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
    echo "<dd class='news-description'>","<a href='news.php'>".$row["news_title"]."</a>","</dd>";
    //echo "<td>".$row["news_detail"]."</td>";
    echo "</tr>";
}
echo "</dl>"
    
?>
           
            <p class="view-detail text-right"><a href="news_list.php">ニュース一覧を見る</a></p>
        </article>
    </section>
   
    <section class="feature contents-box">
        <div class="inner">
            <h2 class="section-title text-center">
                <span class="section-title__white">Feature</span><span class="section-title-ja text-center">特徴</span>
            </h2>
            <ul class="list-feature">
                <li><img src="img/point1.png" alt=""></li>
                <li><img src="img/point2.png" alt=""></li>
                <li><img src="img/point3.png" alt=""></li>
            </ul>
        </div>
    </section>
    
    <section class="cource contents-box">
        <div class="inner">
            <h2 class="section-title text-center">
                <span class="">Cource</span><span class="section-title-ja text-center">コース紹介</span>
            </h2>
            <div class="block-cource block-cource-lab clearfix">
                <div class="cource-img"><img src="img/cource-lab.png" alt=""></div>
                <div class="cource-txt cource-txt__usually">
                <h3 class="cource-title text-center">LABコース</h3>
                <p>週末集中型の初心者対象のチーズ職人養成講座です。<br />
                    週末集中型の初心者対象のチーズ職人養成講座です。<br />
                    週末集中型の初心者対象のチーズ職人養成講座です。<br />
                    週末集中型の初心者対象のチーズ職人養成講座です。<br />
                    週末集中型の初心者対象のチーズ職人養成講座です。<br />
                    </p>
                </div>
            </div>
            <div class="block-cource clearfix">   
                <div class="cource-img__reverse">
                    <img src="img/cource-academy.png" alt="">
                </div>
                <div class="cource-txt cource-txt__reverse">
                    <h3 class="cource-title text-center">ACADEMYコース</h3>
                    <p>週末集中型の初心者対象のチーズ職人養成講座です。<br />
                    週末集中型の初心者対象のチーズ職人養成講座です。<br />
                    週末集中型の初心者対象のチーズ職人養成講座です。<br />
                    週末集中型の初心者対象のチーズ職人養成講座です。<br />
                    週末集中型の初心者対象のチーズ職人養成講座です。<br />
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery">
        <div class="contents-heading bg-yellow">
            <h2 class="section-title text-center">
                <span class="section-title">Gallery</span><span class="section-title__white section-title-ja text-center">ギャラリー</span
            </h2>
        </div>
        <div class="inner contents-box">
            <ul class="list-gallery clearfix">
                <li><a href="#"><img src="img/gallery01.jpg" alt="" /></a></li>
                <li><a href="#"><img src="img/gallery02.jpg" alt="" /></a></li>
                <li><a href="#"><img src="img/gallery03.jpg" alt="" /></a></li>
                <li class="no-white-space"><a href="#"><img src="img/gallery04.jpg" alt="" /></a></li>
                <li><a href="#"><img src="img/gallery05.jpg" alt="" /></a></li>
                <li><a href="#"><img src="img/gallery06.jpg" alt="" /></a></li>
                <li><a href="#"><img src="img/gallery07.jpg" alt="" /></a></li>
                <li class="no-white-space"><a href="#"><img src="img/gallery08.jpg" alt="" /></a></li>
                <li><a href="#"><img src="img/gallery09.jpg" alt="" /></a></li>
                <li><a href="#"><img src="img/gallery10.jpg" alt="" /></a></li>
                <li><a href="#"><img src="img/gallery11.jpg" alt="" /></a></li>
                <li class="no-white-space"><a href="#"><img src="img/gallery12.jpg" alt="" /></a></li>
            </ul>
        </div>
    </section>

    <section class="entry-form">
        <div class="contents-heading bg-yellow">
            <h2 class="section-title text-center">
                <span class="section-title">Entry</span><span class="section-title__white section-title-ja text-center">説明会に申し込む</span></h2>
        </div>
        <div class="inner contents-box">
            <form action="#" class="form-module">
                <table>
                    <tr>
                        <td class="form-text">氏名</td>
                        <td><input type="text" value="" name="name"></td>
                    </tr>
                    <tr>
                        <td class="form-text">フリガナ</td>
                        <td><input type="text" value="" name="kana"></td>
                    </tr>
                    <tr>
                        <td class="form-text">メールアドレス</td>
                        <td><input type="text" value="" name="email"></td>
                    </tr>
                    <tr>
                        <td class="form-text">説明会の希望日時</td>
                        <td><select id="select-box" name="date">
                                <option value="2015/7/18 10:00">2015/7/18 10:00</option>
                                <option value="2015/7/25 10:00">2015/7/25 10:00</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="form-text">志望動機</td>
                        <td>
                            <label for="1"><input type="radio" name="motivation" value="起業したい" id="1">起業をしたい</label>
                            <label for="2"><input type="radio" name="motivation" value="チーズ企業に就職したい。" id="2">チーズ企業に就職したい。</label>
                            <label for="3"><input type="radio" name="motivation" value="チーズと関わる仕事なので、知識をつけたい。" id="3">チーズと関わる仕事なので、知識をつけたい。</label>
                            <label for="4"><input type="radio" name="motivation" value="教養として身につけたい" id="4">教養として身につけたい</label>
                        </td>
                    </tr>
                </table>
                <p class="text-center"><input type="submit" class="entry-btn"></p>
            </form>
        </div>
    </section>

    <!--#information-->
    <?php include("footer.php"); ?>
    