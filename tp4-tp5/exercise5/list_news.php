<?php
	$db = new PDO('sqlite:news.db');

	$stmt = $db->prepare('SELECT * FROM news	');
	$stmt->execute();
	$articles = $stmt->fetchAll();

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
		echo '</footer>';
		echo '</article>';
	}
?>
