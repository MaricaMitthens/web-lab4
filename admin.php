<?php include_once "functions.php"?>
<?php include_once "config.php"?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Администратор новостного портала</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div class="container">
    <?php renderTitle("Администрирование портала") ?>
    <?php renderFormAdmin()?>
    <?php $articles = getArticles();
    while ($row = $articles->fetch_assoc()) {
        echo renderArticlesAdmin($row['id'], $row['title'], $row['text'], $row['author'], $row['date']);
    }?>
</div>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
