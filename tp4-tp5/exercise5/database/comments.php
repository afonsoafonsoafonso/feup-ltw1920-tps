<?php
function getComments() {
    global $db;
    $stmt = $db->prepare('SELECT * FROM comments
                      WHERE news_id = ?');
    $stmt->execute(array($_GET['id']));
    $comments = $stmt->fetchAll();

    return $comments;
}
?>