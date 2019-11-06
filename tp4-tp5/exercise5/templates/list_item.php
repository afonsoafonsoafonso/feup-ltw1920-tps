<?php
echo '<article>';
echo '<header>';
echo '<h1><a href="item.html">' . $article[0]['title'] . '</a></h1>';
echo '</header>';
echo '<img src="http://lorempixel.com/600/300/business/" alt="">';
echo '<p>' . $article[0]['introduction'] . '</p>';
echo '<p>' . $article[0]['fulltext'] . '</p>';
echo '<p><a href="edit_news.php?id=' . $article[0]['id'] . '"> Edit article </a></p>';
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