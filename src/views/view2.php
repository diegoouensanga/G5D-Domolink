<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de panne</title>
</head>
<link rel="stylesheet" href="views/style1.css">

<body>
<div class = "wrapper">
    <div class="header"> <?php include ("header.php"); ?> </div>
    <div class="menu">
        <nav>
            <p><a href="index.php?action=prise_de_rdv">Prise de rendez-vous</a></p>
            <p><a href="index.php?action=faq">Les questions fréquentes</a></p>
            <p><a href="index.php?action=contact">Contact</a></p>
            <p><a href="index.php"> Home</a> </p>
        </nav>
    </div>
    <div class="corps">
        <H1>Formulaire de panne</H1>
        <p>
            <label>
                Numéro du capteur : <input type="number" name="id">
            </label> <br>
            <label>
                Cause de la panne : <br>
                <textarea name="cause_panne" rows="5" cols="50"></textarea>
            </label> <br>
            <label>
                Date de la panne : <input type="date" name="date" JJ/MM/AAAA >
            </label>
            <button>Valider</button>
        </p>
    </div>
</div>
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