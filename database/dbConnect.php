<?php

try {
    $db = new PDO(
        'mysql:host=localhost;dbname=dwwm2022_2;charset=utf8',
        'root'
    );
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
