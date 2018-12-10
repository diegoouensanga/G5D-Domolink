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
            <p><a href="index.php?">Les questions frequentes</a></p>
            <p><a href="index.php?action=messagerie"> Messagerie </a>
                <div class ="menumessagerie">
                    <nav>
                        <ul><a href="index.php?"action=nouveau_message> Nouveau message  </a></ul>
                        <ul><a href="index.php?"action=message_envoye> Messages envoyés  </a></ul>
                        <ul><a href="index.php?"action=message_recu> Messages reçus</a></ul>

        </nav>
    </div>
    </p>
    </nav>
</div>
<div class="corps">
    <h1> Nouveau message  </h1>

    <label for="desinataire">Destinataire :  </label>


    <select id="destinataire" name="destinataire">
        <option value="Jean  Boursin">Jean Boursin</option>
        <option value="Michel Vianot">Michel Vianot</option>
        <option value="Patrick Wang">Patrick Wang</option>

    </select>
    <button id="ajoutcontact"> Ajouter un contact </button>
    <br>
    <label for="objet">Objet :  </label>

    <input type="text" id="objet"  placeholder="Exemple : Rendez-vous technicien vendredi 18 novembre">
    <br>
    <label for="message">Message :  </label>
    <br>
    <textarea id="message" placeholder="Exemple : Bonjour, je souhaitais vous contacter à propos de..."></textarea>
    <br>
    <button id="envoyer"> Envoyer </button>
</div>
</div>

</body>
<?php include ("footer.php"); ?>
</html>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Akhara
 * Date: 10/12/2018
 * Time: 13:24
 */