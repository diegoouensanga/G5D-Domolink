<?php

function dbConnect(){
    try {
        $db = new PDO('mysql:host=localhost;dbname=Domolink;charset=utf8', 'root', 'alpine');
        return $db;

    }
    catch (Exception $e){
        die ('Erreur : '.$e->getMessage());
    }
}


function insertPannes($serie, $message){ //Insert dans la base de donnée les nouvelles données dans la base de données
    $db = dbconnect();
    $utilisateurId = $_SESSION['id'];
    $equipementId = $db->query('SELECT id from Equipements WHERE serie =$serie');
    $req = $db->prepare("INSERT INTO Pannes(date, serie, equipement_id, message, etat, client_id ) VALUES (:DATE, $serie, $equipementId, $message, 1, $utilisateurId)");
    $req->execute();
    $req->closeCursor();
}


function verifSerie($serie){ //vérifie que le numéro de série existe et appartient bien à celui de l'utilisateur.
    $db = dbConnect();
    $verif = $db->query("SELECT piece_id FROM Equipements WHERE serie = $serie");
    if ($verif== null){
        return false;
    }
    elseif($verif != null){
        $proprio = $_SESSION['id'];
        $verifproprio = $db->query("SELECT utilisateur_id FROM pieces WHERE id = $verif");
        if ($proprio == $verifproprio){
            return true;
        }
        else{
            return false;
        }
    }
    else {
        return false;
    }
}

function verifMail($destinataire){
    $db = dbConnect();
    $confmail = $db->query('SELECT id FROM Utilisateurs WHERE mail = $destinataire');
    if ($confmail==null){
        return false;
    }
    else return true;
}

function getIdReceveur($destinataire){
    $db = dbConnect();
    $id_receveur = $db->query('SELECT id FROM Utilisateurs WHERE mail =$destinataire');
    return $id_receveur;
}

function insertMessage($destinataire, $message, $titre){
    $db = dbConnect();
    $envoyeur_id = $_SESSION['id'];
    $receveur_id = getIdReceveur($destinataire);
    $req = $db->prepare('INSERT INTO Messages(id_envoyeur, id_receveur, date, titre, message) VALUES($envoyeur_id, $receveur_id, DATE , $titre, $message)');
    $req->execute();
    $req->closeCursor();
}

function messageRecu1()
{
    $db = dbConnect();
    $idUtilsateur = $_SESSION['id'];
    $message_recu = $db->query('SELECT * FROM Messages WHERE id_receveur = $idUtilsateur ORDER BY date DESC ');
    while ($donnees = $message_recu->fetch()) {
        ?>
        <tr>
        <td>
            <?= $donnees['id_expediteur'] ?>
        </td>
        <td>
            <?= $donnees['titre'] ?>
        </td>
        <td>
            <?= $donnees['message'] ?>
        </td>
        <td>
            <?= ($donnees['date']) ?>
        </td>
        </tr>
        <?php $message_recu->closeCursor();

    }
}

function messageEnvoye1(){
    $db = dbConnect();
    $idUtilsateur = $_SESSION['id'];
    $message_envoye = $db->query('SELECT * FROM Messages WHERE id_envoyeur = $idUtilisateur ORDER BY date DESC ');
    while ($donnees = $message_envoye->fetch()) {
        ?>
        <tr>
        <td>
            <?= $donnees['id_receveur'] ?>
        </td>
        <td>
            <?= $donnees['titre'] ?>
        </td>
        <td>
            <?= $donnees['message'] ?>
        </td>
        <td>
        <?= ($donnees['date']) ?>
        <?php
    }
    $message_envoye->closeCursor();

}

function insertRDV($dispo, $cause_rdv){
    $db = dbConnect();
    $idUtilisateur = $_SESSION['id'];
    $req = $db->prepare("INSERT INTO RDV(id, cause, dispo) VALUES($idUtilisateur, $cause_rdv, $dispo)");
    $req->bindParam("dispo", $dispo);
    $req->bindParam("cause", $cause_rdv);
    $req->execute();
    $req->closeCursor();


}

/**
 * Created by IntelliJ IDEA.
 * User: Akhara
 * Date: 16/12/2018
 * Time: 12:52
 */