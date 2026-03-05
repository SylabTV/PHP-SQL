<?php

abstract class AbstractManager {

    protected PDO $db;

    public function __construct() {

        $host = "db.3wa.io";
        $dbname = "souleymanecoulibaly_modelsmanagers";
        $user = "souleymanecoulibaly";
        $password = "f7cef8fc7ea56f74c64893bb7c9348c8";

        $this->db = new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8",
            $user,
            $password
        );
    }
}