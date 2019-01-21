<!DOCTYPE html>
<head>
    <meta charset="UTF-8">

    <!-- Import des fichiers CSS -->
    <link rel="shortcut icon" href="ressources/favicon.png"/>
    <link rel="stylesheet" href="css/cssGeneral.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/dashBoard.css">
    <link rel="stylesheet" href="css/notificationV2.css">
    <link rel="stylesheet" href="css/animaux.css">
    <meta name="description" content="Le Top de la Maison Connectée !">
    <title>DomoLink</title>
    <?php include("affichageimage.php"); ?>
</head>
<body>
<?php include("header.php"); ?>
<div class="wrapper">
    <nav class="menu"> <!-- Affichage du menu de navigation-->

        <!-- Bouton retour à l'accueil -->
        <?php
        echo "<a href='dashBoard.php'>Retour à l'accueil</a>";
        $req = Database::execute('SELECT id,nom FROM animaux WHERE id_utilisateur = :id_utilisateur', Array('id_utilisateur' => $_SESSION['id']));

        //Si on se trouve sur l'onglet Gestion des Animaux, affiche le bouton avec la police en rouge

        if (isset($_GET['animal']) && $_GET["animal"] == "GestionAnimaux")
            echo "<a class='active' href='?animal=GestionAnimaux'>Gestion des animaux</a>";
        else
            echo "<a href='?animal=GestionAnimaux'>Gestion des animaux</a>";

        // Tant qu'il y a un animal dans la BDD, on affiche son bouton associé (en rouge si on est sur la page associée)


        while (isset($req) && $donnees = $req->fetch()) {
            if ($donnees['id'] == $_GET["animal"])
                echo "<a class='active' href='?animal={$donnees['id']}'>{$donnees['nom']}</a>";

            else
                echo "<a href='?animal={$donnees['id']}'>{$donnees['nom']}</a>";
        }


        //Si on se trouve sur l'onglet Ajouter Animal, affiche le bouton avec la police en rouge

        if (isset($_GET['animal']) && $_GET["animal"] == "AjouterAnimal")
            echo "<a class='active' href='?animal=AjouterAnimal'>+ Ajouter Animal</a>"; //
        else
            echo "<a href='?animal=AjouterAnimal'>+ Ajouter Animal</a>";

        ?>
    </nav>

    <!-- Onglet Gestion des animaux-->

    <?php if ($_GET['animal'] == 'GestionAnimaux') : ?>
        <div class="case4-6">
            <h2>Bienvenue sur la rubrique de gestion des animaux</h2>
        </div>
        <div class="case4-6">
            <br></br>
            <br></br>
            <h3> Vous trouverez ici les informations relatives au distributeur de nourriture </h3>
            <h3> et pourrez modifier ses fonctionnalités à votre guise</h3>
        </div>
        <!-- Onglet Ajouter un Animal-->

    <?php elseif ($_GET["animal"] == 'AjouterAnimal') : ?>
        <form autocomplete='off' class='title formPiece' action='modifAnimal.php' method='post'>Nom de l'animal
            :<br><br>
            <input type='text' name='nomAnimal' style='width : 70%;' maxlength='15'><br><br>
            <input class='button blueButton' style="width:50%;" type='submit' value='Ajouter'>
        </form>

        <!-- Onglet des animaux-->

    <?php elseif (isset($_GET['animal'])) : ?>
        <div class='case1'>

            <form id="form1" runat="server">
                <img id="blah" src="ressources/icone-animal.png" alt="your image" width=200%>
            </form>
            <br></br>
            <form class='wrapDeleteButton' action='modifAnimal.php?animal=<?php echo $_GET['animal']; ?>' method='post'>
                <input type='submit' class='button redButton' value="Supprimer la page de l'animal" name='deleteanimal'><br>
            </form>

        </div>

        <div class='case3'>

        <br></br>

        <a class="button blueButton" name='ajoutenourriture' href='?nourriture=ModifierNourriture'>Ajouter une heure de
            distribution de nourriture</a>
        <br></br><br></br>

        <form class='wrapDeleteButton' action='?nourriture=DeleteNourriture' method='post'>
            <input type='submit' class='button blueButton' value="Réinitialiser les heures de distributions"
                   name='deleteheurenourriture'>
        </form>


        <h4>Historique des derniers repas :</h4>
        <p>Hier à 10h00</p>
        <p>Hier à 20h00</p>

        <p>Aujourd'hui à 10h00</p>
        <p>Aujourd'hui à 20h00</p>
        <h4>Repas programmés :</h4>

        <?php
        $req = Database::execute('SELECT id,heure FROM dateheurenourriture WHERE id_utilisateur = :id_utilisateur', Array('id_utilisateur' => $_SESSION['id']));
        while (isset($req) && $donnees = $req->fetch()) {

            echo "<p>Un repas sera distribué à {$donnees['heure']}.</p>";
        }
        ?>

    <?php elseif ($_GET['nourriture'] == 'ModifierNourriture') : ?>


        <form autocomplete='off' class='title formPiece' action='modifNourriture.php' method='post'>Distribution
            automatique à l'heure suivante : <br><br>

            <p>HH:MM:SS</p>

            <input type='text' name='heureNourriture' style='width : 70%;' maxlength='14'><br><br>
            <p>Exemple : 203000 pour 20:30:00</p>
            <input class='button blueButton' style="width:50%;" type='submit' value='Ajouter'>
        </form>

    <?php elseif ($_GET['nourriture'] == 'DeleteNourriture') : ?>

        <div class="case4-6"
        <h2> L'heure de distribution a bien été supprimée.</h2>

        <?php
        $req2 = Database:: execute('DELETE FROM dateheurenourriture ORDER BY id desc limit 1'); ?>

        </div>
    <?php endif; ?>

</div>

</div>
<?php include("footer.php"); ?>
</body>
