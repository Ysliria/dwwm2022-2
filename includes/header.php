<?php
$currentPage = $_SERVER['SCRIPT_NAME'];
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/5/united/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Eventlife</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Eventlife</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                    aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php
                        if ($currentPage === '/index.php') {
                            echo 'active';
                        } ?>" href="/index.php">Accueil
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php
                        if ($currentPage === '/evenementRepository.php') {
                            echo 'active';
                        } ?>" href="/evenement.php">Evénements
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php
                        if ($currentPage === '/contact.php') {
                            echo 'active';
                        } ?>" href="/contact.php">Contact</a>
                    </li>
                </ul>

                <form class="d-flex">
                    <?php if (!isset($_SESSION['user'])) { ?>
                        <a href="../login.php" class="btn btn-secondary my-2 my-sm-0">Se connecter</a>
                    <?php } else { ?>
                        <a href="../logout.php" class="btn btn-secondary my-2 my-sm-0">Se déconnecter</a>
                    <?php } ?>
                </form>
            </div>
        </div>
    </nav>
</header>
