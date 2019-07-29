



<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  header('Location: check.php');
}

require_once('function.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

?>

<!DOCTYPE html>
<html lang="ja">
	<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  
  <link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity= "sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin= "anonymous" > 

	<link rel="stylesheet" href="assets/css/check.css">
    <title>入力内容確認</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>入力内容確認</h1>
<form method="post" action="thanks.php" id="flag1">
  <div class="element_wrap">
    <div>
      <label>Name</label>
    </div>
    <?php if ($name == '') {
      echo  'ニックネームが入力されていません。';
    } else {
      echo 'ようこそ、' . $name .'様';
    } ?>
    </div>
  </div>
 
 
  <div class="element_wrap">
    <div>
      <label>E-mail</label>
    </div>
    <div>
    <?php if ($email == '') {
         echo 'メールアドレスが入力されていません。';
    } else {
         echo 'メールアドレス：' . $email;
    }?>
    </div>
  </div>
 
  <div class="element_wrap">
    <div>
      <label>Message</label>
    </div>
    <div>
   <?php if ($message == '') {
        echo  'お問い合わせ内容が入力されていません。';
    } else {
       echo 'お問い合わせ内容：' . $message;
    }?>
    </div>
  </div>
  <button type="button" onclick="history.back()">back</button>
  <input type="submit" name="btn_submit" value="Send">
  <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
  <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
  <input type="hidden" name="message" value="<?php echo $_POST['message']; ?>">
</form>
 
</body>