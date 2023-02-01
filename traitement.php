<?php

if(
    (!isset($_POST['nom']) || empty($_POST['nom'])) ||
    (!isset($_POST['lieu']) || empty($_POST['lieu'])) ||
    (!isset($_POST['places']) || empty($_POST['places'])) ||
    (!isset($_POST['prix']) || empty($_POST['prix'])) ||
    (!isset($_POST['dateEvenement']) || empty($_POST['dateEvenement']))
) {
    header('Location: /addEvent.php');
    //echo '<div class="alert alert-warning">Les données fournies à votre formulaire sont incorrectes !</div>';
} else {
    header('Location: /addEvent.php');
}

