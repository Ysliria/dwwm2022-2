<?php

session_start();

require_once 'database/dbConnect.php';
require_once 'database/evenementRepository.php';


//var_dump($_POST);die;

if (
    (!isset($_POST['nom']) || empty($_POST['nom'])) ||
    (!isset($_POST['lieu']) || empty($_POST['lieu'])) ||
    (!isset($_POST['places']) || empty($_POST['places'])) ||
    (!isset($_POST['prix']) || empty($_POST['prix'])) ||
    (!isset($_POST['dateEvenement']) || empty($_POST['dateEvenement']))
) {
    $_SESSION['alert'] = [
        'alert'   => 'warning',
        'message' => 'Les informations fournies ne sont pas correctes'
    ];

    header('Location: /addEvent.php');
}

$event = [
    'nom'           => htmlspecialchars($_POST['nom']),
    'lieu'          => htmlspecialchars($_POST['lieu']),
    'places'        => htmlspecialchars($_POST['places']),
    'prix'          => htmlspecialchars($_POST['prix']),
    'dateEvenement' => htmlspecialchars($_POST['dateEvenement']),
    'id'            => htmlspecialchars($_POST['id'])
];

if ($_POST['id']) {
    $modifiedEvent = updateEvent($db, $event);

    if (!$modifiedEvent) {
        $_SESSION['alert'] = [
            'alert'   => 'danger',
            'message' => 'Une erreur est survenue ! Veuillez nous en excuser !'
        ];
    } else {
        $_SESSION['alert'] = [
            'alert'   => 'success',
            'message' => $event['nom'] . ' a bien été modifié !'
        ];
    }
} else {
    $createdEvent = addEvent($db, $event);

    if (!$createdEvent) {
        $_SESSION['alert'] = [
            'alert'   => 'danger',
            'message' => 'Une erreur est survenue ! Veuillez nous en excuser !'
        ];
    } else {
        $_SESSION['alert'] = [
            'alert'   => 'success',
            'message' => getEventById($db, $createdEvent)['nom'] . ' a bien été créé !'
        ];
    }
}

header('Location: /evenement.php');
