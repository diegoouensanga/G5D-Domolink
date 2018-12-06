<?php
    include("fonctions.php");
    if (false){
    $post =  htmlspecialchars($_POST['prenom']); 
    echo $post;
        /*
        $req = $bdd->prepare('INSERT INTO pieces(nom) VALUES(:nom)');
        $req->execute(array(
            'nom' => $post,
        ));
        $reponse = $bdd->query('SELECT LAST_INSERT_ID() AS last_id FROM pieces');
        $data = $reponse ->fetch();*/
        }
        if (empty($_POST['identifiant'])){
            echo "a";

       /*
        $id =  $_GET['piece']; 
        $req = $bdd->prepare('DELETE FROM pieces WHERE id = :id');
        $req->execute(array(
            'id' => $id,
        ));*/
        }
    else {
        $identifiant = $_POST['identifiant'];
        $mdp = $_POST['mdp'];
        $req = Database::execute("INSERT INTO Utilisateurs(identifiant,mdp) VALUES(:identifiant,:mdp)",array(
            'mdp' => $mdp,'identifiant' => $identifiant));
        echo "<script> alert('Enregistrement réussi !');
                window.location.href='connexion.php';
                </script>";
        }
?>