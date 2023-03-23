<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');


try {
    $dbConnectie = new PDO("mysql:host=localhost;dbname=chirpify",
        "root", "root");
} catch (PDOException $e){
    die("Error!: " . $e->getMessage());
}

//$dbConnectie