<?php
$success = true;
$err_message = "";
if(!array_key_exists('comment',$_POST)){
    $success = false;
    $err_message = "データの入力がありません";
    return;
}
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Simple Page</title>
</head>
<body>

</body>
</html>