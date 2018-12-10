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
    <div class="header"> <?php include ("header.php"); ?> </div>
    <div class="menu">
        <nav>
            <p><a href="index.php?action=prise_de_rdv">Prise de rendez-vous</a></p>
            <p><a href="index.php?action=signaler_une_panne">Formulaire de panne</a></p>
            <p><a href="index.php?">Les questions fréquentes</a></p>
            <p><a href="index.php?action=messagerie"> Messagerie</a></p>
        </nav>
    </div>
    <div class="corps">
        <H1>Formulaire de panne</H1>
        <p>
            <label>
                <h3> Numéro du capteur :</h3> <input type="number" name="id">
            </label> <br> <br>
            <label>
                <h3> Cause de la panne : </h3> <br>
                <textarea name="cause_panne" rows="5" cols="50"></textarea>
            </label> <br> <br>
            <label>
                <h3> Date de la panne : </h3> <input type="date" name="date" JJ/MM/AAAA >
            </label> <br>
            <a href="index.php?action=conf_fp"> Envoyer  </a>
        </p>
    </div>
</div>
<?php include ("footer.php"); ?>
</body>
</html>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Akhara
 * Date: 12/11/2018
 * Time: 13:37
 */
?>