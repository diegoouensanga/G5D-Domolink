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
            <p><a href="router.php?action=prise_de_rdv">Prise de rendez-vous</a></p>

        </nav>
    </div>
    <div class="corps">
        <H1>Formulaire de panne</H1>
        <p> <form method="post" action="index.php?action=ajouter_formulaire">
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

        <p>Le numéro de série n'est pas bon.</p>


    </div>
</div>

</body>
<?php include ("../../footer.php"); ?>
</html>
