<?php
$host = "db.3wa.io";
$port = "3306";
$dbname = "souleymanecoulibaly_phpj6";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "";
$password = "";

$db = new PDO(
    $connexionString,
    $user,
    $password
);

var_dump($db);

?>