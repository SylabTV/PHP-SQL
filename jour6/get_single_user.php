<?php

require "connexion.php";


if (isset($_GET['id'])) {
$stmt = $db->prepare("select * from users WHERE id = :id");

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