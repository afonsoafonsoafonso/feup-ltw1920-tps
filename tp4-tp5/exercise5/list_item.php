<?php
include_once('database/connection.php');
include_once('database/item.php');
include_once('database/comments.php');

$article = getArticle();
$comments = getComments();

echo '<article>';
echo '<header>';
echo '<h1><a href="item.html">' . $article[0]['title'] . '</a></h1>';
echo '</header>';
echo '<img src="http://lorempixel.com/600/300/business/" alt="">';
echo '<p>' . $article[0]['introduction'] . '</p>';
echo '<p>' . $article[0]['fulltext'] . '</p>';
echo '<section id="comments">';
echo '<h1>' . sizeof($comments) . ' Comments</h1>';
foreach($comments as $comment) {
    echo '<article class = "comment">';
    echo '<span class="user">' . $comment['username'] . '</span>';
    echo '<span class="date">' . substr(gmdate('r', $comment['published']), 0, -5) . '</span>'; 
    echo '<p>' . $comment['text'] . '</p>';
    echo '</article>';
}
?>