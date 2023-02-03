<?php
session_start();

require_once 'database/dbConnect.php';
require_once 'database/evenementRepository.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header('Location: /index.php');
    header('HTTP/1.1 404 Not Found');
}

$id    = htmlspecialchars($_GET['id']);
$event = deleteEvent($db, $id);

if (!$event) {
    $_SESSION['alert'] = [
        'alert'   => 'danger',
        'message' => 'Une erreur est survenue ! Veuillez nous en excuser !'
    ];
} else {
    $_SESSION['alert'] = [
        'alert'   => 'success',
        'message' => 'L\'événement a bien été supprimé !'
    ];
}

header('Location: /evenement.php');
