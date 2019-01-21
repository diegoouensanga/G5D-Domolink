<?php
include("fonctions.php");
session_start();


// Ajout d'une heure de distribution de nourriture dans la BDD

if (!empty($_POST['heureNourriture'])) {
    $post = htmlspecialchars($_POST['heureNourriture']);
    $req = Database::execute('INSERT INTO dateheurenourriture(heure,id_utilisateur) VALUES(:heure,:id_utilisateur)', Array(
        'heure' => $post,
        'id_utilisateur' => $_SESSION['id']
    ));

    $reponse = Database::execute('SELECT LAST_INSERT_ID() AS last_id FROM dateheurenourriture');
    $data = $reponse->fetch();
    header("Location:/animaux.php?animal={$data['last_id']}");

}