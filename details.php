<?php

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

include_once 'includes/header.php'; ?>

    <main class="container mt-5">
        <h1 class="mb-3"><?= $event['nom'] ?> <small class="text-muted"><?= $event['date_evenement'] ?></small></h1>

        <hr>

        <section class="mb-3">
            <div class="progress mb-3">
                <div class="progress-bar" role="progressbar"
                     style="width: <?= ($event['inscrit'] * 100) / $event['places'] ?>%;"
                     aria-valuenow="<?= $event['inscrit'] ?>" aria-valuemin="0"
                     aria-valuemax="<?= $event['places'] ?>"></div>
            </div>

            <div class="row">
                <div class="col-5">
                    <dl class="row">
                        <dt class="col-2">Lieu :</dt>
                        <dd class="col-10"><?= $event['lieu'] ?></dd>

                        <dt class="col-2">Prix :</dt>
                        <dd class="col-10"><?= $event['prix'] ?> €</dd>

                        <dt class="col-2">Places :</dt>
                        <dd class="col-10"><?= $event['places'] ?></dd>
                    </dl>

                    <a href="#" class="btn btn-success col-2"><i class="fa-solid fa-user-plus"></i></a>
                </div>

                <aside class="col-7">
                    <h3>Lorem</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut autem facilis ipsum
                        sed.
                        Atque aut facere fuga ipsam magnam molestias nisi nulla perferendis perspiciatis quam? Expedita
                        praesentium quia sint.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda blanditiis consequatur,
                        deserunt dicta dolores doloribus, dolorum error excepturi harum inventore iure, labore maiores
                        modi molestiae nam odit porro vel voluptas?
                    </p>
                </aside>
            </div>

            <?php if(isset($_SESSION['user'])) { ?>
            <div class="row">
                <a href="updateEvent.php?id=<?=$event['id']?>" class="btn btn-warning col-2"><i class="fa-solid fa-pencil"></i></a>
                <a href="deleteEvent.php?id=<?=$event['id']?>" class="btn btn-danger col-2 offset-8"><i class="fa-solid fa-trash"></i></a>
            </div>
            <?php } ?>
        </section>
    </main>

<?php
include_once 'includes/footer.php';
