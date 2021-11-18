<?php
$success = true;
$err_message = "";
if(!array_key_exists('comment',$_POST)){
    $success = false;
    $err_message = "データの入力がありません";
}elseif(strlen($_POST['comment']) == 0){
    $success = false;
    $err_message = "データが空白です";
}
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Simple Page</title>
    <link rel="stylesheet" href="style.css">
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