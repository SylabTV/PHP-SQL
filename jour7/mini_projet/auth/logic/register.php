<?php

require '..connexion.php';

if(isset($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['password'])) {
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO user (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";
    
    $db->exec($sql);
    
    echo "succes"
} else {
    
    echo "echec"
}

?>