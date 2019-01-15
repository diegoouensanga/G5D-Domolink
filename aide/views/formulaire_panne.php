<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/ressources/favicon.png"/>
    <link rel="stylesheet" href="/css/cssGeneral.css">
    <link rel="stylesheet" href="/css/style1.css">
    <meta name="description" content="Le top de la maison Connectée !">
    <title>Formulaire de panne</title>
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
            <p><a href="router.php?action=prise_de_rdv">Prise de rendez-vous</a></p>
        </nav>
    </div>
    <div class="corps">
        <H1>Formulaire de panne</H1>
        <p> <form method="post" action="router.php?action=ajouter_formulaire">
            <label>
                Numéro de série de l'équipement : <input type="number" name="serie">
            </label> <br> <br>
            <label>
                Cause de la panne : <br>
                <input type="text" name="message" size="50" style="height:55px;" required>

            </label> <br> <br>
            <input type="submit" class="button" VALUE="Envoyer">

        </p>
        </form>


    </div>
</div>

</body>
<?php include ("../../footer.php"); ?>
</html>
