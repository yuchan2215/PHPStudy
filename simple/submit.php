<?php
$success = true;
$err_message = [];
function checkData($name){
    global $success,$err_message;
    if(!array_key_exists($name,$_POST)){
        $success = false;
        array_push($err_message,$name."が存在しません");
    }elseif(strlen($_POST['comment']) == 0){
        $success = false;
        array_push($err_message,$name."が空です。");
    }
}
checkData("comment");
checkData("mail");
?>
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
    <div id="m_item">
    <?php
    if($success == true){
        echo '<h1>実行結果</h1><p>'.htmlspecialchars($_POST['comment']).'</p><p>'.htmlspecialchars($_POST['mail']).'</p>';
    }else{
        foreach($err_message as $value){
            echo '<h1>エラー</h1><p>'.$value.'</p>';
        }
    }
    ?>
    </div>
</div>
<?php include 'footer.php';?>
</body>
</html>