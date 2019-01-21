<?php
include("fonctions.php");
session_start();



if (!empty($_POST['heureNourriture'])) {
    $post = htmlspecialchars($_POST['heureNourriture']);
    $req = Database::execute('INSERT INTO dateheurenourriture(heure,id_utilisateur) VALUES(:heure,:id_utilisateur)', Array(
        'heure' => $post,
        'id_utilisateur' => $_SESSION['id']
    ));

    $reponse = Database::execute('SELECT LAST_INSERT_ID() AS last_id FROM dateheurenourriture');
    $data = $reponse->fetch();
    header("Location:/animaux.php?animal={$data['last_id']}");

    if (isset($_POST['deleteheurenourriture'])) {

        echo 'delete';

        header("Location:/animaux.php?animal=GestionAnimaux");

        $req = Database::execute('DELETE FROM dateheurenourriture WHERE id = :id2 AND id_utilisateur = (SELECT MAX(id_utilisateur) FROM dateheurenourriture)', Array(
            'id' => $id2,
            'id_utilisateur' => $_SESSION['id']
        ));
    }
}