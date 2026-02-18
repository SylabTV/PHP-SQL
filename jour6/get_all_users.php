<?php

require "connexion.php";

$stmt = $db->prepare("select * from users");
$stmt->execute();
$users = $stmt->fetchALL(PDO::FETCH_ASSOC);

echo "<pre>";
var_dump($users);
echo "</pre>";

?>