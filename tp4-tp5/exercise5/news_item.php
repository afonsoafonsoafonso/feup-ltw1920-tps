<?php
  include_once('database/connection.php');
  include_once('database/item.php');
  include_once('database/comments.php');

  $article = getArticle();
  $comments = getComments();

  include('templates/header.php');
  include('templates/list_item.php');
  include('templates/footer.php');
?>