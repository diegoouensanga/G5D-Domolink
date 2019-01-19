<?php
include_once("fonctions.php");
    session_start();
    if (isset($_GET['idEq'])){
        $req = Database::execute('DELETE FROM Equipement WHERE id = :id AND  piece_id IN (SELECT id FROM Pieces WHERE id_utilisateur =:id_utilisateur)',Array(
            'id' => $_GET['idEq'],
            'id_utilisateur' => $_SESSION['id']
        ));
        header("Location: /dashBoard.php?piece=".$_GET['idPiece']);
        die();

    }