<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="views/CSS/style1.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />
<head>
    <meta charset="UTF-8">
    <title>Vos services</title>
</head>

<body>
<div class = "wrapper">
    <div class ='header'>
        <?php include ("header.php"); ?>
    </div>
    <div class="menu">
        <nav>
            <p><a href="index.php?action=prise_de_rdv"> Prise de rendez-vous</a></p>
            <p><a href="index.php?action=signaler_une_panne">Formulaire de panne</a></p>
            <p><a href="index.php?action=faq">Les questions fréquentes</a></p>
            <p><a href="index.php?action=contact">Contact</a></p>
        </nav>
    </div>
    <div class="corps">
        <h1>Mes services</h1>
        <p> - Prise de rendez-vous avec un technicien Domisep <br>
        - Signaler une panne <br>
        - Les questions fréquentes <br>
        - Contact <br>
        - Messagerie <br>
        </p>

    </div>
    </div>
<?php include ("footer.php"); ?>
</body>
</html>
<?php
?>