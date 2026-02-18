<?php

require "connexion.php";

$sql = "select * from users";
$stmt = $db->query($sql);
$users = $stmt->fetchALL(PDO::FETCH_ASSOC);

echo "<pre>";
var_dump($users);
echo "</pre>";

?>