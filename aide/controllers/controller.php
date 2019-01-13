<?php
require "../models/model.php";

function prise_de_rdv(){
    require "../views/prise_de_rdv.php";
}
function formulaire_panne(){
    require "../views/formulaire_panne.php";
}
function questions_frequentes(){
    require "../views/faq.php";
}

function confirmation_rdv(){
    require "../views/confirmation_rdv.php";
}

function confirmation_panne(){
    require "../views/confirmation_panne.php";
}

function messagerie(){
    require "../views/messagerie.php";
}

function message_recu(){
    require "../views/message_recu.php";
}

function message_envoye(){
    require "../views/message_envoye.php";
}

function nouveau_message(){
    require "../views/messagerie.php";
}

function ajout_formulaire(){
    if ($_POST["serie"] && $_POST["message"]){
        $serie = ($_POST["serie"]);
        $message = htmlspecialchars($_POST["message"]);

        if (verifSerie($serie)){
            insertPannes($serie, $message);
            require "views/confirmation_panne.php";
        }
        else{
            require "views/fail_panne.php";
        }
    }

}

function formulaire_message(){
    if ($_POST['destinataire'] && $_POST['message'] && $_POST['objet']){
        $message = htmlspecialchars($_POST['message']);
        $destinataire = htmlspecialchars($_POST['destinataire']);
        $objet = htmlspecialchars($_POST['objet']);
        if (verifMail($destinataire)){
            insertMessage($destinataire, $message, $objet);
            require "views/confirmation_message.php";
        }
        else{
            require "views/fail_message.php";
        }
    }
}

function demande_rdv(){
    if ($_POST['cause_rdv'] && $_POST['dispo']){
       $dispo = htmlspecialchars($_POST['dispo']);
       $cause_rdv = ($_POST['cause_rdv']);
       insertRDV($dispo, $cause_rdv);
       require "views/confirmation_rdv.php";
    }
    else{
        require "views/rdv_fail.php";
    }
}

function messageRecu(){
    require messageRecu1();
}
?>