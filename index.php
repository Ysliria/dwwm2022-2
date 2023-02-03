<?php

session_start();

require_once 'database/dbConnect.php';
require_once 'database/evenementRepository.php';

$events = getNextEvents($db);

include_once 'includes/header.php'; ?>

<?php
if (isset($_SESSION['alert'])) {
    echo '<div class="alert alert-' . $_SESSION['alert']['alert'] . '">' . $_SESSION['alert']['message'] . '</div>';
    unset($_SESSION['alert']);
}
?>

    <main class="container mt-5">
        <h1>Bientôt !</h1>

        <hr>

        <div class="row g-3 mt-3 pb-3">
            <?php
            foreach ($events as $event) { ?>
                <div class="col-4">
                    <div class="card border-primary">
                        <h3 class="card-header"><?= $event['nom'] ?></h3>
                        <div class="card-body">
                            <h5 class="card-title"><?= $event['lieu'] ?></h5>
                            <h6 class="card-subtitle text-muted"><?= $event['date_evenement'] ?></h6>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consequatur est iure maxime pariatur repudiandae tempora? Aliquam commodi consectetur eum, ex excepturi facilis maxime omnis quis sapiente suscipit, tempora temporibus?
                            </p>
                        </div>
                        <div class="card-body">
                            <a href="#" class="card-link">S'inscrire !</a>
                        </div>
                        <div class="card-footer text-muted">
                            <?php
                            if ($event['inscrit'] === $event['places']) {
                                echo 'Il n\'y a plus de place';
                            } else {
                                echo 'Il nous reste ' . $event['places'] - $event['inscrit'] . ' places !';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

        <hr>

        <section class="row mt-3">
            <h2>Actualité</h2>

            <article class="mt-3">
                <h3>Lorem</h3>

                <figure>
                    <blockquote class="blockquote">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias asperiores cum eius eos pariatur quia quis suscipit, ullam voluptatibus? Aliquam eius tenetur voluptate? Accusantium adipisci dignissimos dolorum facilis rerum?</p>
                    </blockquote>

                    <figcaption class="blockquote-footer">
                        Someone famous in <cite title="Source Title">Source Title</cite>
                    </figcaption>
                </figure>
            </article>

            <article class="mt-3">
                <h3>Lorem</h3>

                <figure>
                    <blockquote class="blockquote">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias asperiores cum eius eos pariatur quia quis suscipit, ullam voluptatibus? Aliquam eius tenetur voluptate? Accusantium adipisci dignissimos dolorum facilis rerum?</p>
                    </blockquote>

                    <figcaption class="blockquote-footer">
                        Someone famous in <cite title="Source Title">Source Title</cite>
                    </figcaption>
                </figure>
            </article>

            <article class="mt-3">
                <h3>Lorem</h3>

                <figure>
                    <blockquote class="blockquote">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias asperiores cum eius eos pariatur quia quis suscipit, ullam voluptatibus? Aliquam eius tenetur voluptate? Accusantium adipisci dignissimos dolorum facilis rerum?</p>
                    </blockquote>

                    <figcaption class="blockquote-footer">
                        Someone famous in <cite title="Source Title">Source Title</cite>
                    </figcaption>
                </figure>
            </article>

            <article class="mt-3">
                <h3>Lorem</h3>

                <figure>
                    <blockquote class="blockquote">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias asperiores cum eius eos pariatur quia quis suscipit, ullam voluptatibus? Aliquam eius tenetur voluptate? Accusantium adipisci dignissimos dolorum facilis rerum?</p>
                    </blockquote>

                    <figcaption class="blockquote-footer">
                        Someone famous in <cite title="Source Title">Source Title</cite>
                    </figcaption>
                </figure>
            </article>
        </section>
    </main>

<?php
include_once 'includes/footer.php';
