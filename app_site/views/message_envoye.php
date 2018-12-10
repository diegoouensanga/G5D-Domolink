<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de panne</title>
</head>
<link rel="stylesheet" href="views/CSS/style1.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />

<body>
<div class = "wrapper">
    <div class ='header'>
        <?php include ("header.php"); ?>
    </div>
    <div class="menu">
        <nav>
            <p><a href="index.php?action=prise_de_rdv">Prise de rendez-vous</a></p>
            <p><a href="index.php?action=signaler_une_panne">Formulaire de Panne</a></p>
            <p><a href="index.php?action=faq">Les questions frequentes</a></p>
            <p><a href="index.php?action=messagerie"> Messagerie </a>
                <div class ="menumessagerie">
                    <nav>
            <p> <a href="index.php?"action=nouveau_message> Nouveau message  </a></p>
            <p> <a href="index.php?"action=message_envoye> Messages envoyés  </a></p>
            <p> <a href="index.php?"action=message_reçu> Messages reçus</a></p>
        </nav>
    </div>
    </p>
    <p><a href="index.php"> Home</a> </p>
    </nav>
</div>
<div class="corps">
    <h1> Messages envoyés  </h1>


</div>
</div>
<?php include ("footer.php"); ?>
</body>
</html>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Akhara
 * Date: 10/12/2018
 * Time: 13:38
 */