<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/ressources/favicon.png"/>
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/style1.css">
    <meta name="description" content="Le top de la maison Connectée !">
    <title>DomoLink</title>
</head>
<?php include("../../header.php"); ?>

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />

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
    <h1> Nouveau message  </h1>

    <p> <form method="post" action="router.php?action=formulaire_message">
        <label>
            Destinataire : <input type="email" name="destinataire">
        </label> <br><br>
        <label>
            Objet : <input type="text" name="objet" required>
        </label><br><br>
        <label>
            Message : <br>
            <input type="text" name="message" required>

        </label> <br>
        <input type="submit" VALUE="Envoyer">

    </p>
    </form>
</div>
</div>

</body>
<?php include ("../../footer.php"); ?>
</html>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Akhara
 * Date: 10/12/2018
 * Time: 13:24
 */