<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Simple Page</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes">
</head>
<body>
<div id="m_container">
<form action="submit.php" method="post" id="m_item">
    <div class="input_box">
        <input type="text" name="comment" placeholder="何かコメントを入力">
    </div>
    <div class="input_box">
        <input type="email" name="mail" placeholder="xxx@xxx.xx">
    </div>
    <div class="input_box right_box">
        <input type="submit" value="送信">
    </div>
</form>
</div>
<?php include 'footer.php';?>
</body>
</html>