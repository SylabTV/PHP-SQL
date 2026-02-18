<?php

require "connexion.php";


$stmt = $db->prepare("UPDATE address set street = :street, city = :city, zipcode = :zipcode WHERE id = :id");

$parameters = [
    'id' => $_POST['id'],
    'street' => $_POST['street'],
    'city' => $_POST['city'],
    'zipcode' => $_POST['zipcode']
];

$stmt->execute($parameters);

echo "Adresse modifier avec succes";

?>