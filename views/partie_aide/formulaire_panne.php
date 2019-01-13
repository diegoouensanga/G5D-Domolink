<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="/ressources/favicon.png"/>
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/views/partie_aide/CSS/style1.css">
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
            <p><a href="router.php?action=prise_de_rdv">Prise de rendez-vous</a></p>
        </nav>
    </div>
    <div class="corps">
        <H1>Formulaire de panne</H1>
        <p> <form method="post" action="router.php?action=ajouter_formulaire">
            <label>
                Numéro de série de l'équipement : <input type="number" name="serie">
            </label> <br>
            <label>
                Cause de la panne : <br>
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
