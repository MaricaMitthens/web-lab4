<?php
$user = 'root';
$password = 'root';
$db = 'lab4';
$host = 'localhost';
$port = 3306;
//
//$link = mysqli_init();
//$success = mysqli_real_connect(
//    $link,
//    $host,
//    $user,
//    $password,
//    $db,
//    $port
//);
//if (!$success) {
//    die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";
//$res = $link->query("SELECT * FROM news ORDER BY id");
//echo $res->num_rows;
//$res->data_seek(0);
//while ($row = $res->fetch_assoc()) {
//    echo " id = " . $row['id'] . "\n";
//}



function Connection(){
    $user = 'root';
    $password = 'root';
    $db = 'lab4';
    $host = 'localhost';
    $port = 3306;
    $mysqli = new mysqli($host, $user, $password, $db, $port);
    if ($mysqli->connect_errno) {
        die('Cannot connect to mySQL');
    }
    return $mysqli;
}

function getArticles(){
    $mysqli = Connection();
    $select_articles = 'SELECT * from news';
    $res = $mysqli->query($select_articles);
    $res->data_seek(0);
    return $res;
}

?>