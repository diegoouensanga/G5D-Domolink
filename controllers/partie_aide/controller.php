 <?php
require "../../models/partie_aide/model.php";

function prise_de_rdv(){
    require "../../views/partie_aide/prise_de_rdv.php";
}
function formulaire_panne(){
    require "../../views/partie_aide/formulaire_panne.php";
}
function questions_frequentes(){
    require "../../views/partie_aide/faq.php";
}

function confirmation_rdv(){
    require "../../views/partie_aide/confirmation_rdv.php";
}

function confirmation_panne(){
    require "../../views/partie_aide/confirmation_panne.php";
}

function messagerie(){
    require "../../views/partie_aide/messagerie.php";
}

function message_recu(){
    require "../../views/partie_aide/message_recu.php";
}

function message_envoye(){
    require "../../views/partie_aide/message_envoye.php";
}

function nouveau_message(){
    require "../../views/partie_aide/messagerie.php";
}

function ajout_formulaire(){
    if ($_POST["serie"] && $_POST["message"]){
        $serie = ($_POST["serie"]);
        $message = htmlspecialchars($_POST["message"]);

        if (verifSerie($serie)){
            insertPannes($serie, $message);
            require "../../views/partie_aide/confirmation_panne.php";
        }
        else{
            require "../../views/partie_aide/fail_panne.php";
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
            require "../../views/partie_aide/confirmation_message.php";
        }
        else{
            require "../../views/partie_aide/fail_message.php";
        }
    }
}

function demande_rdv(){
    if ($_POST['cause_rdv'] && $_POST['dispo']){
       $dispo = htmlspecialchars($_POST['dispo']);
       $cause_rdv = ($_POST['cause_rdv']);
       insertRDV($dispo, $cause_rdv);
       require "../../views/partie_aide/confirmation_rdv.php";
    }
    else{
        require "../../views/partie_aide/rdv_fail.php";
    }
}

function messageEnvoye(){
    require messageEnvoye1();
}

function messageRecu(){
    require messageRecu1();
}


?>