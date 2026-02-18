<?php

require "connexion.php";


$stmt = $db->prepare("INSERT INTO address (street, city, zipcode) VALUES (:street, :city, :zipcode)");

$parameters = [
    'street' => $_POST['street'],
    'city' => $_POST['city'],
    'zipcode' => $_POST['zipcode']
];

$stmt->execute($parameters);

$id = $db->lastInsertId();

echo "Adresse ajuoter avec succes";

?>