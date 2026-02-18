<?php

require "connexion.php";


$stmt = $db->prepare("UPDATE users SET address = NULL WHERE address = :id");
$stmt->execute(['id' => $_POST['id']]);


$stmt = $db->prepare("DELETE FROM address WHERE id = :id");
$stmt->execute(['id' => $_POST['id']]);

echo "Adresse supprimée avec succès";

?>