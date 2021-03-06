<?php include_once "functions.php"?>
<?php include_once "config.php"?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Новостной портал</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="container">
    <?php renderTitle("Статьи и новости нашего города") ?>
    <?php $articles = getArticles();
        while ($row = $articles->fetch_assoc()) {
            echo renderArticles($row['title'], $row['text'], $row['author'], $row['date']);
    }?>
</div>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>