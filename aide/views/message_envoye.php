<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'">
    <link rel="shortcut icon" href="/ressources/favicon.png"/>
    <link rel="stylesheet" href="/css/cssGeneral.css">
    <link rel="stylesheet" href="/css/aide.css">
    <meta name="description" content="Le top de la maison Connectée !">
    <title>DomoLink</title>
</head>

<?php include("../../header.php"); ?>

<body>
<div class = "wrapper">

    <div class="menu">
        <nav>
            <p><a href="router.php?">Les questions fréquentes</a></p>
            <p><a href="router.php?action=signaler_une_panne">Formulaire de panne</a></p>
            <p><a href="router.php?action=messagerie"> Messagerie </a></p>
            <div class ="menumessagerie">
                <nav>
                    <ul><a href="router.php?action=nouveau_message"> Nouveau message  </a></ul>
                    <ul><a href="router.php?action=message_envoye"> Messages envoyés  </a></ul>
                    <ul><a href="router.php?action=message_recu"> Messages reçus</a></ul>

                </nav>
                <p><a href="router.php?action=prise_de_rdv">Prise de rendez-vous</a></p>
            </div>
        </nav>
    </div>
<div class="corps">
    <h1> Messages envoyés  </h1>


</div>
</div>

</body>
<?php include("../../footer.php"); ?>
</html>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Akhara
 * Date: 10/12/2018
 * Time: 13:38
 */