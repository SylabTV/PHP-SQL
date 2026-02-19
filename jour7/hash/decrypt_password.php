<?php

if (isset($_POST['password']) && isset($_POST['hash'])) {

    $password = $_POST['password'];
    $hash = $_POST['hash'];

    if (password_verify($password, $hash)) {
        echo "Mot de passe correct";
    } else {
        echo "Mot de passe erroné";
    }

} else {
    echo "Veuillez remplir les champs.";
}

?>
