<?php
include_once "config.php";
if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $text = $_POST['text'];

    $mysqli = Connection();
    $insert_article = "INSERT INTO news (title, author, text) VALUES ('$title', '$author', '$text')";
    $res = $mysqli->query($insert_article);
    header('Location: http://localhost/admin.php');
}
?>