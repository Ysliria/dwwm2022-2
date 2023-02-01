<?php
$events = [
        [
                'nom'           => 'Afup Day Lille',
                'lieu'          => 'Université Catholique de Lille',
                'places'        => 120,
                'prix'          => 85,
                'inscrits'      => 0,
                'dateEvenement' => '12/05/2023'
        ],
        [
                'nom'           => 'AFUP Day 2023 Lyon',
                'lieu'          => 'CPE Lyon',
                'places'        => 160,
                'prix'          => 85,
                'inscrits'      => 0,
                'dateEvenement' => '12/05/2023'
        ],
        [
                'nom'           => 'Forum PHP 2023',
                'lieu'          => 'Disneyland Paris',
                'places'        => 800,
                'prix'          => 340,
                'inscrits'      => 0,
                'dateEvenement' => '12/10/2023'
        ],
        [
                'nom'           => 'Meetup PHP Tours',
                'lieu'          => 'CEFIM',
                'places'        => 50,
                'inscrits'      => 0,
                'prix'          => 0,
                'dateEvenement' => '19/01/2023'
        ]
];
include_once 'includes/header.php'; ?>

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
                    <td class="col-2"><?=$event['dateEvenement']?></td>
                    <td class="col-3"><?=$event['nom']?></td>
                    <td><?=$event['lieu']?></td>
                    <td class="col-1"><?=$event['prix']?> €</td>
                    <td class="col-2">
                        <button class="btn btn-info"><i class="fa-solid fa-magnifying-glass"></i></button>
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
