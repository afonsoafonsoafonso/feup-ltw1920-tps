<?php
function getArticle() {
    global $db;
    $stmt = $db->prepare('SELECT news.*, users.*, COUNT(comments.id) AS comments
                      FROM news LEFT JOIN users USING (username) LEFT JOIN comments ON comments.news_id = news.id
                      WHERE news.id = ?');
    $stmt->execute(array($_GET['id']));
    $article = $stmt->fetchAll();
    return $article;
}
?>