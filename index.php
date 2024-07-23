<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>Index Page</title>
    <style>
        .web_site{
            background-image: url(./img/background_01.jpg);
            background-color:rgba(0,0,0,0.8);
            background-blend-mode:lighten;
        }
    </style>
</head>
<body>
<section class="web_site">
    <?php include 'header.php'; ?>
    <?php include 'title.php'; ?>
    <?php include 'news.php'; ?>
    <?php include 'about.php'; ?>
    <?php include 'words.php'; ?>
    <?php include 'favorite.php'; ?>
    <?php include 'contact.php'; ?>
    <?php include 'comment.php'; ?>
    <?php include 'footer.php'; ?>
</section>
    <script type="text/javascript" src="./js/comment.js"></script>
</body>
</html>



