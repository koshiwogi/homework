<?php

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        header('Location: index.php');
    }

    require_once('function.php');
    require_once('dbconnect.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];



     // SQL文の準備
     $stmt = $dbh->prepare('INSERT INTO surveys(name,email,message) VALUES (?, ?,?)');
     // SQL文の実行
     $stmt->execute([$name,$email,$message]);//?を変数に置き換えてSQLを実行

    ?>
  

<!DOCTYPE html>
<html lang="ja">
<head>
    <title>送信完了</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>お問い合わせありがとうございました！</h1>
    <p><?php echo h($name); ?></p>
    <p><?php echo h($email); ?></p>
    <p><?php echo h($message); ?></p>
    <p><a href="index.php">入力画面に戻る</a></p>
</body>
</html>