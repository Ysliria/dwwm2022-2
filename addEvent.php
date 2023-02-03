<?php
session_start();

//if (!isset($_SESSION['user'])) {
//    header('Location: /login.php');
//}

include_once 'includes/header.php';
?>
    <main class="container mt-5">
        <h1>Un nouvel événement</h1>

        <hr>

        <form action="traitement.php" method="post" class="mt-5">
            <fieldset>
                <legend>Ajouter un événement</legend>
            </fieldset>

            <div class="form-group mt-2">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de l'événement">
            </div>

            <div class="form-group mt-2">
                <label for="lieu">Lieu</label>
                <input type="text" class="form-control" id="lieu" name="lieu" placeholder="Lieu de l'événement">
            </div>

            <div class="form-group mt-2">
                <label for="places">Places</label>
                <input type="number" class="form-control" id="places" name="places" placeholder="Nombre de place">
            </div>

            <div class="form-group mt-2">
                <label for="prix">Prix</label>
                <input type="number" class="form-control" id="prix" name="prix" placeholder="Prix de la place">
            </div>

            <div class="form-group mt-2">
                <label for="dateEvenement">Date</label>
                <input type="date" class="form-control" id="dateEvenement" name="dateEvenement" placeholder="Date de l'événement">
            </div>

            <button type="submit" class="float-end btn btn-primary mt-2">Créer</button>
        </form>
    </main>

<?php
include_once 'includes/footer.php';

