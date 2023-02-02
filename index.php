<?php
session_start();

require_once 'database/dbConnect.php';
require_once 'database/evenement.php';

$events = getAllEvent($db);

include_once 'includes/header.php'; ?>

<?php
if (isset($_SESSION['alert'])) {
    echo '<div class="alert alert-' . $_SESSION['alert']['alert'] . '">' . $_SESSION['alert']['message'] . '</div>';
    unset($_SESSION['alert']);
}
?>

    <main class="container mt-5">
        <h1>Nos prochains événements</h1>

        <hr>

        <div class="row">
            <a href="addEvent.php" class="btn btn-primary col-2 offset-10">Ajouter un événement</a>
        </div>

        <table class="table table-hover mt-5">
            <caption>Liste de nos événements</caption>
            <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Nom</th>
                <th scope="col">Lieu</th>
                <th scope="col">Prix</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>

            <tbody>
            <?php foreach ($events as $event) {?>
                <tr>
                    <td class="col-2"><?=$event['date_evenement']?></td>
                    <td class="col-3"><?=$event['nom']?></td>
                    <td><?=$event['lieu']?></td>
                    <td class="col-1"><?=$event['prix']?> €</td>
                    <td class="col-2">
                        <a href="details.php?id=<?=$event['id']?>" class="btn btn-info"><i class="fa-solid fa-magnifying-glass"></i></a>
                        <button class="btn btn-success"><i class="fa-solid fa-user-plus"></i></button>
                        <button class="btn btn-warning"><i class="fa-solid fa-pencil"></i></button>
                        <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </main>

<?php
include_once 'includes/footer.php';


function prendrePlaces(int $nbPlaces, array &$evenement): int
{
    $evenement['inscrits'] += $nbPlaces;

    return $evenement['places'] - $evenement['inscrits'];
}

function calculGains(array $evenement): void
{
    $gain = $evenement['inscrits'] * $evenement['prix'];
    $nom  = str_ireplace('afup', 'AFUP', $evenement['nom']);

    echo "Le nombre de places vendues pour $nom nous rapporte $gain € !";
}
