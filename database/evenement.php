<?php

function getAllEvent(PDO $db)
{
    $query = $db->query('SELECT * FROM evenement');

    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function getEventById(PDO $db, string $id)
{
    $query = $db->prepare('SELECT * FROM evenement WHERE id = :id');
    $query->execute(['id' => $id]);

    return $query->fetch(PDO::FETCH_ASSOC);
}

function addEvent(PDO $db, array $event)
{
    $query = $db->prepare(
        "INSERT INTO evenement (nom, lieu, places, prix, date_evenement) VALUES (:nom, :lieu, :places, :prix, :dateEvenement)"
    );

    $query->bindParam('nom', $event['nom']);
    $query->bindParam('lieu', $event['lieu']);
    $query->bindParam('places', $event['places']);
    $query->bindParam('prix', $event['prix']);
    $query->bindParam('dateEvenement', $event['dateEvenement']);

    if (!$query->execute()) {
        return false;
    }

    return $db->lastInsertId();
}
