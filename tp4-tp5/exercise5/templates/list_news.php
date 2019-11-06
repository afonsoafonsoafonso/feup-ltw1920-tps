<?php
	foreach($articles as $article) {
		echo '<article>';
		echo '<header>';
		echo '<h1>' . $article['title'] .' </h1>';
		echo '</header>';
		echo '<img src="http://lorempixel.com/600/300/business/" alt="">';
		echo '<p>' . $article['introduction'] . '</p>';
		echo '<p>' . $article['fulltext'] . '</p>';
		echo '<footer>';
		echo '<span class="author">' . $article['username'] . '</span>';
		echo '<span class="tags">'; 
		$tags = explode(",", $article['tags']);
		foreach($tags as $tag) {
			echo '<a href="index.php"> #' . $tag . ' ' . '</a>';
		} 
		echo '</span>';
		echo '<span class="date">' . substr(gmdate('r', $article['published']), 0, -5) . '</span>'; 
		echo '<a href="news_item.php?id='. $article['id'] . '">' . $article['comments'] . ' comments' . '</a>';
		echo '</footer>';
		echo '</article>';
	}
?>
