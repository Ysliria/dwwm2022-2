<?php
session_start();

require_once 'database/dbConnect.php';

include_once 'includes/header.php'; ?>

    <main class="container mt-5">
        <h1>Connexion</h1>

        <hr>

        <form action="connexion.php" method="post" class="mt-5">
            <fieldset>
                <legend>Formlaire de connexion</legend>
            </fieldset>

            <div class="form-group mt-2">
                <label for="identifiant">Identifiant</label>
                <input type="text" class="form-control" id="identifiant" name="identifiant">
            </div>

            <div class="form-group mt-2">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <button type="submit" class="float-end btn btn-primary mt-2">Se connecter</button>
        </form>
    </main>


<?php

include_once 'includes/footer.php';