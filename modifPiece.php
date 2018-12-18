<?php
    include("fonctions.php");
    session_start();
    if (!empty($_POST['nomPiece'])){
        $post =  htmlspecialchars($_POST['nomPiece']); 
        $req = Database::execute('INSERT INTO pieces(nom,id_utilisateur) VALUES(:nom,:id_utilisateur)',Array(
            'nom' => $post,
            'id_utilisateur' => $_SESSION['id']
        ));
        $reponse = Database::execute('SELECT LAST_INSERT_ID() AS last_id FROM pieces');
        $data = $reponse ->fetch();
        header("Location:/dashBoard.php?piece={$data['last_id']}");
    }
    if (empty($_POST['nomPiece'])){
        header("Location:/dashBoard.php?piece=VueGenerale");
        $id =  $_GET['piece']; 
        $req = Database::execute('DELETE FROM pieces WHERE id = :id AND id_utilisateur = :id_utilisateur',Array(
            'id' => $id,
            'id_utilisateur' => $_SESSION['id']
        ));
    }