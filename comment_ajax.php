<?php
// Database connection details
$dsn = 'mysql:dbname=favorite-site_comment;host=127.0.0.1;charset=utf8';
$user = 'root';
$password = '';

try {
    $PDO = new PDO($dsn, $user, $password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;

    // Query to get the next set of comments
    $sql = "SELECT name, comment, send_at FROM comments ORDER BY send_at DESC LIMIT 5 OFFSET :offset";
    $stmt = $PDO->prepare($sql);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($comments);

} catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
    exit;
}
?>
