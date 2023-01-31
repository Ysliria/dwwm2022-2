<?php

$afupDayLille = [
    'nom'           => 'Afup Day Lille',
    'lieu'          => 'Université Catholique de Lille',
    'places'        => 120,
    'prix'          => 85,
    'inscrits'      => 0,
    'dateEvenement' => '12/05/2023'
];
$afupDayLyon  = [
    'nom'           => 'AFUP Day 2023 Lyon',
    'lieu'          => 'CPE Lyon',
    'places'        => 160,
    'prix'          => 85,
    'inscrits'      => 0,
    'dateEvenement' => '12/05/2023'
];
$forumPhp     = [
    'nom'           => 'Forum PHP 2023',
    'lieu'          => 'Disneyland Paris',
    'places'        => 800,
    'prix'          => 340,
    'inscrits'      => 0,
    'dateEvenement' => '12/10/2023'
];
$meetupCefim = [
    'nom'      => 'Meetup PHP Tours',
    'lieu'     => 'CEFIM',
    'places'   => 50,
    'inscrits' => 0,
    'prix'     => 0,
    'dateEvenement' => '19/01/2023'
];

function prendrePlaces(int $nbPlaces, array &$evenement): int
{
    $evenement['inscrits'] += $nbPlaces;

    return $evenement['places'] - $evenement['inscrits'];
}

function calculGains(array $evenement): void
{
    $gain = $evenement['inscrits'] * $evenement['prix'];
    $nom = str_ireplace('afup', 'AFUP', $evenement['nom']);

    echo "Le nombre de places vendues pour $nom nous rapporte $gain € !";
}
