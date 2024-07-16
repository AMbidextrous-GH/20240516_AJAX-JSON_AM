<?php
// Database connection details
$dsn = 'mysql:dbname=favorite-site_comment;host=127.0.0.1;charset=utf8';
$user = 'root';
$password = '';

try {
    $PDO = new PDO($dsn, $user, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query to get the latest 15 comments
    $sql = "SELECT name, comment, send_at FROM comments ORDER BY send_at DESC LIMIT 15";
    $stmt = $PDO->query($sql);
    $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/comment.css">
    <title>Comments</title>

</head>
<body>
    <div class="container">
        <h1>Comments</h1>
        <?php if (empty($comments)): ?>
            <p>No comments available.</p>
        <?php else: ?>
            <?php foreach ($comments as $comment): ?>
                <div class="comment">
                    <div class="comment-name"><strong>名前:</strong> <?php echo htmlspecialchars($comment['name'], ENT_QUOTES, 'UTF-8'); ?></div>
                    <div class="comment-text"><strong>コメント:</strong> <?php echo nl2br(htmlspecialchars($comment['comment'], ENT_QUOTES, 'UTF-8')); ?></div>
                    <div class="comment-date"><?php echo htmlspecialchars($comment['send_at'], ENT_QUOTES, 'UTF-8'); ?></div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>
</html>
