<?php

require "connexion.php";


if (isset($_GET['id'])) {
$stmt = $db->prepare("SELECT U.*, A.street, A.city, A.zipcode FROM users U LEFT JOIN address A on U.address = A.id WHERE U.id = :id ");

$parameters = [
    'id' => $_GET['id']
];

$stmt->execute($parameters);

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
var_dump($users);
echo "</pre>";
}
?>