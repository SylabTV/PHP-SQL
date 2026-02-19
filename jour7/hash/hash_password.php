<?php

if (isset($_POST['password'])) {

    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    echo "<h2>Résultat</h2>";
    echo "Mot de passe original : " . htmlspecialchars($password) . "<br><br>";
    echo "Mot de passe chiffré : " . $hash;

} else {
    echo "Aucun mot de passe reçu.";
}

?>
