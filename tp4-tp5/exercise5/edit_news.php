<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Edit News</title>
</head>

<body>
    <form action="action_edit_news.php" method="GET">
        <div>
            <label>title:
                <input type="text" name="title">
            </label>
        </div>
        <div>
            <label>introduction:
                <input type="textarea" name="introduction">
            </label>
        </div>
        <div>
            <label>fulltext:
                <input type="textarea" name="fulltext">
            </label>
        </div>
        <div>
            <label>id:
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
            </label>
        </div>
        <input type="submit" value="Submit">
    </form>
</body>