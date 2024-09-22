<!DOCTYPE html>
<html lang="ja">
    
<head>
    <meta charset="UTF-8">
    <title>diworksblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    
<?php

mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
$stmt = $pdo->query("select * from diworks_keijiban");

?>
    
<header>
    <img src = "diblog_logo.jpg">
    
    <div class="menu">
    <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>D.I.Blogについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
    </ul>
    </div>
    
</header>
    
<main>

<div class = "left">
    
<h1>プログラミングに役立つ掲示板</h1>
    
<div class = "box1">
<h2>入力フォーム</h2>
    
<form method = "post" action = "insert.php">
    
    <div class = "text">
    <div>        
        <label>ハンドルネーム</label>
        <br>
        <input type = "text" name = "handlename" size = "35">
    </div>
        
    <div>
        <label>タイトル</label>
        <br>
        <input type = "text" name = "title" size = "35">
    </div>
        
    <div>
        <label>コメント</label>
        <br>
        <textarea cols = "75" rows = "7" name = "comments"></textarea>
    </div>
        
    <div>
        <input type ="submit" class = "button" value = "投稿する">
    </div>
    </div>
        
</form>
</div>    
    
<div class = "post">
<?php
    
while($row = $stmt->fetch()){
    echo "<div class = 'kiji'>";
    echo "<h3>".$row['title']."</h3>";
    echo "<div class = 'contents'>";
    echo $row['comments'];
    echo "<div class = 'handlename'>posted by".$row['handlename']."</div>";
    echo "</div>";
    echo "</div>";
}
     
?>
</div>    
</div>

<div class = "right">
    
<h4>人気の記事</h4>
    <div class = "submenu">
    <ul>
        <li>PHPオススメ本</li>
        <li>PHP MyAdminの使い方</li>
        <li>いま人気のエディタTop5</li>
        <li>HTMLの基礎</li>
    </ul>
    
<h4>オススメリンク</h4>
    <ul>
        <li>ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</li>
        <li>XAMPPのダウンロード</li>
        <li>Eclipseのダウンロード</li>
        <li>Braketsのダウンロード</li>
    </ul>
    
<h4>カテゴリ</h4>
    <ul>
        <li>HTML</li>
        <li>PHP</li>
        <li>MySQL</li>
        <li>JavaScript</li>
    </ul>
    </div>
    
</div>
</main>
    
<footer>
    Copyright D.I.works|D.I.blog is the one which provides A to Z about programming
</footer>
    
</body>
</html>