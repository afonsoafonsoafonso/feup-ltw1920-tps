<?php
    include_once('database/connection.php');
    include_once('database/news.php');

    $articles = getAllNews();

    include('templates/header.php');
    include('templates/list_news.php');
    include('templates/footer.php');
?>

