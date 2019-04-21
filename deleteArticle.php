<?php
include_once "config.php";
if (isset($_POST['id'])) {
    $id=$_POST['id'];
    $mysqli = Connection();
    $delete_article = 'DELETE FROM news WHERE id=' . $id;
    $res = $mysqli->query($delete_article);
    header('Location: http://localhost/admin.php');
}
?>

