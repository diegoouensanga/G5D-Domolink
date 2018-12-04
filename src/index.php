

<?php

define("ROOT", __DIR__);

require ROOT . "/controllers/controller.php";
if (isset($_GET["action"])) {
    $action = htmlspecialchars($_GET["action"]);

    switch ($action){
        case "prise_de_rdv":
            prise_de_rdv();
            break;

        case "signaler_une_panne":
            formulaire_panne();
            break;

        case "faq":
            questions_frequentes();
            break;

        case "contact":
            contact();
            break;

        default :
            echo"error 404";
            break;
    }
}
else {
    seeHome();
}
?>
