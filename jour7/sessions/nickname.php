<?php
// Démarrage de la session
session_start();

// Vérifier si le pseudo a été envoyé depuis le formulaire
if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])) {
    $_SESSION['pseudo'] = $_POST['pseudo'];
    // Redirection vers welcome.php après stockage
    header("Location: welcome.php");
    exit;
} else {
    // Si aucun pseudo envoyé, on revient au formulaire
    header("Location: index.php");
    exit;
}