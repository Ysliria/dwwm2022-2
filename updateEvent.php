<?php
session_start();

//if (!isset($_SESSION['user'])) {
//    header('Location: /login.php');
//}

require_once 'database/dbConnect.php';
require_once 'database/evenementRepository.php';

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

include_once 'includes/header.php';
?>
    <main class="container mt-5">
        <h1>Mise à jour de <?= $event['nom']?></h1>

        <hr>

        <form action="traitement.php" method="post" class="mt-5">
            <fieldset>
                <legend>Modifier <?= $event['nom']?></legend>
            </fieldset>

            <div class="form-group mt-2">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?= $event['nom']?>">
            </div>

            <div class="form-group mt-2">
                <label for="lieu">Lieu</label>
                <input type="text" class="form-control" id="lieu" name="lieu" value="<?= $event['lieu']?>">
            </div>

            <div class="form-group mt-2">
                <label for="places">Places</label>
                <input type="number" class="form-control" id="places" name="places" value="<?= $event['places']?>">
            </div>

            <div class="form-group mt-2">
                <label for="prix">Prix</label>
                <input type="number" class="form-control" id="prix" name="prix" value="<?= $event['prix']?>">
            </div>

            <div class="form-group mt-2">
                <label for="dateEvenement">Date</label>
                <input type="date" class="form-control" id="dateEvenement" name="dateEvenement" value="<?= $event['date_evenement']?>">
            </div>

            <input type="hidden" name="id" value="<?= $event['id']?>">

            <button type="submit" class="float-end btn btn-primary mt-2">Modifier</button>
        </form>
    </main>

<?php
include_once 'includes/footer.php';

