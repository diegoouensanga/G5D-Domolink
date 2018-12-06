<?php
    include("fonctions.php");
    session_start();
    $identifiant = $_POST['identifiant'];
    $mdp = hash("sha256",$_POST['mdp']);
    $req = Database::execute('SELECT id,type FROM utilisateurs WHERE mdp = :mdp AND identifiant = :identifiant',array('mdp' => $mdp, 'identifiant' => $_POST['identifiant']));
    $donnees = $req->fetch();
    if ($donnees) {
        header("Location:/gererSonDomicile.php?piece=VueGenerale");
        $_SESSION['id'] = $donnees['id'];
        $_SESSION['type'] = $donnees['type'];
    }
    else {
        header("Location:/connexion.php");
    }
?>