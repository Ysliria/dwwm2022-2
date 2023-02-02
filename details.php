<?php

require_once 'database/dbConnect.php';
require_once 'database/evenement.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header('Location: /index.php');
    header('HTTP/1.1 404 Not Found');
}

$id    = htmlspecialchars($_GET['id']);
$event = getEventById($db, $id);

if (!$event) {
    setcookie('error', 'La ressource n\'existe pas');
    header('HTTP/1.1 404 Not Found');
    header('Location: /index.php');
}

include_once 'includes/header.php'; ?>

    <main class="container mt-5">
        <h1><?= $event['nom'] ?> <small class="text-muted"><?= $event['date_evenement'] ?></small></h1>
    </main>

<?php
include_once 'includes/footer.php';
