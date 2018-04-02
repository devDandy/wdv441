<?php
    require_once('../inc/NewsArticles.class.php');
    $NewsArticles = new NewsArticles();
    
    $articleList = $NewsArticles->getList();
    var_dump($articleList);

?>

<!DOCTYPE html>
<html>
<head>
    <title>List of Articles</title>
</head>
<body>

</body>
</html>