<?php
    include_once('database/connection.php');

    $title = $_GET["title"];
    $introduction = $_GET["introduction"];
    $fulltext = $_GET["fulltext"];
    $id = $_GET["id"];

    $stmt = $db->prepare('UPDATE news
                          SET title = ?,
                              introduction = ?,
                              fulltext = ?
                          WHERE id = ?');
    $stmt->execute(array($title, $introduction, $fulltext, $id));

    header('Location: news_item.php?id=' . $id);
?>