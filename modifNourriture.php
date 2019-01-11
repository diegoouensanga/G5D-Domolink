<?php
include("fonctions.php");
session_start();
if (!empty($_POST['heureNourriture'])){
    $post =  htmlspecialchars($_POST['heureNourriture']);
    $req = Database::execute('INSERT INTO nourriture(heure,id_utilisateur) VALUES(:heure,:id_utilisateur)',Array(
        'heure' => $post,
        'id_utilisateur' => $_SESSION['id']
    ));
    $reponse = Database::execute('SELECT LAST_INSERT_ID() AS last_id FROM nourriture');
    $data = $reponse ->fetch();
    header("Location:/animaux.php?nourriture={$data['last_id']}");
}
if (empty($_POST['heureNourriture'])){
    header("Location:/animaux.php?nourriture={$data['last_id']}");
    $id =  $_GET['nourriture'];
    $req = Database::execute('DELETE FROM nourriture WHERE id = :id AND id_utilisateur = :id_utilisateur',Array(
        'id' => $id,
        'id_utilisateur' => $_SESSION['id']
    ));
}