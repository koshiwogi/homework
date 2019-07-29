<?php
require_once('function.php');
require_once('dbconnect.php');


//SQLを実行
$stmt = $dbh->prepare('SELECT * FROM surveys');
$stmt->execute();
$results = $stmt->fetchAll();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>一覧</title>
</head>

<body>
    <!-- //画面に表示する -->
    <?php foreach ($results as $result) : ?>
        <p><?php echo h($result['name']); ?></p>
        <p><?php echo h($result['email']); ?></p>
        <p><?php echo h($result['message']); ?></p>
    <?php endforeach; ?>
</body>

</html>