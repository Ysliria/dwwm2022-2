<?php
include_once 'includes/header.php';
?>
<main class="container mt-5">
    <form action="" method="post">
        <fieldset>
            <legend>Contactez-nous !</legend>
        </fieldset>

        <div class="form-group mt-2">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom">
        </div>

        <div class="form-group mt-2">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prénom">
        </div>

        <div class="form-group mt-2">
            <label for="mail">Adresse mail</label>
            <input type="email" class="form-control" id="mail" name="mail" placeholder="Votre adresse mail">
        </div>

        <div class="form-group mt-2">
            <label for="objet">Objet</label>
            <input type="text" class="form-control" id="objet" name="objet" placeholder="Objet de votre message">
        </div>

        <div class="form-group mt-2">
            <label for="message">Que souhaitez-vous ?</label>
            <textarea rows="5" class="form-control" id="message" name="message" placeholder="Votre demande"></textarea>
        </div>

        <button type="submit" class="float-end btn btn-primary mt-2">Envoyer</button>
    </form>
</main>


<?php
include_once 'includes/footer.php';
