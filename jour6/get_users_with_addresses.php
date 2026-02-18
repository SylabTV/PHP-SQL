<?php

require "connexion.php";


$stmt = $db->prepare("SELECT U.*, A.street, A.city, A.zipcode FROM users U LEFT JOIN address A on U.address = A.id");

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
var_dump($users);
echo "</pre>";

?>