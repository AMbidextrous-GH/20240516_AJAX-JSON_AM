<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dsn = 'mysql:dbname=favorite-site_comment;host=127.0.0.1;charset=utf8';
    $user = 'root';
    $password = '';

    try {
        $PDO = new PDO($dsn, $user, $password);
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
        $send_at = date('Y-m-d H:i:s');

        // SQL文の準備と実行（データの挿入）
        $sql = "INSERT INTO comments (name, email, comment, send_at) VALUES (:name, :email, :comment, :send_at)";
        $stmt = $PDO->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':comment', $comment);
        $stmt->bindParam(':send_at', $send_at);
        $stmt->execute();

        echo "<script>alert('Message Sent'); window.location.href = 'contact.php';</script>";
    } catch (PDOException $e) {
        echo 'データベースエラー: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/contact.css">
  <title>Contact</title>
</head>
<body>
<button id="js-show-popup"><img src="./img/contact.png"></button>
<div class="popup" id="js-popup">
     <div class="popup-inner">
      <h1 class="popup-title">contact</h1>
      <div class="close-btn" id="js-close-btn"><i class="fas fa-times">×</i></div>
      <div class="Form">
        <form action="contact.php" method="POST">
          <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>name</p>
            <input type="text" class="Form-Item-Input" name="name" placeholder="例）山田太郎" required>
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>mail</p>
            <input type="email" class="Form-Item-Input" name="email" placeholder="例）example@gmail.com" required>
          </div>
          <div class="Form-Item">
            <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>message</p>
            <textarea class="Form-Item-Textarea" name="comment" required></textarea>
          </div>
          <input type="submit" class="Form-Btn" value="send">
          <input type="button" class="Form-Btn" onclick="location.href='index.php'" value="back">
        </form>
        <div>
          <img src="./img/com-1--unscreen.gif">
        </div>
      </div>
    </div>
    <div class="black-background" id="js-black-bg"></div>
  </div>

<script type="text/javascript" src="./js/contact.js"></script>
</body>
</html>
