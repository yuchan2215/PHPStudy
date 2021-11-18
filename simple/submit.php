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
checkData("email");
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Simple Page</title>
</head>
<body>
<?php
if($success == true){
    echo '<h1>実行結果</h1><p>'.htmlspecialchars($_POST['comment']).'</p>';
}else{
    echo '<h1>エラー</h1><p>'.$err_message.'</p>';
}
?>
</body>
</html>