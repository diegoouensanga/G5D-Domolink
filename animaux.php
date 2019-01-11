<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
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
    <nav class = "menu">
    <?php
    echo "<a href='dashBoard.php'>Retour à l'accueil</a>";
    $req = Database::execute('SELECT id,nom FROM animaux WHERE id_utilisateur = :id_utilisateur',Array('id_utilisateur' => $_SESSION['id']));
    if (isset($_GET['animal']) && $_GET["animal"] == "GestionAnimaux")
        echo "<a class='active' href='?animal=GestionAnimaux'>Gestion des animaux</a>";
    else
        echo "<a href='?animal=GestionAnimaux'>Gestion des animaux</a>";
    while(isset($req) && $donnees = $req->fetch()) {
        if ($donnees['id'] == $_GET["animal"])
            echo "<a class='active' href='?animal={$donnees['id']}'>{$donnees['nom']}</a>";
        else
            echo "<a href='?animal={$donnees['id']}'>{$donnees['nom']}</a>";
    }
    if (isset($_GET['animal']) && $_GET["animal"] == "AjouterAnimal")
        echo "<a class='active' href='?animal=AjouterAnimal'>+ Ajouter Animal</a>"; //
    else
        echo "<a href='?animal=AjouterAnimal'>+ Ajouter Animal</a>";

    ?>
    </nav>

    <?php if($_GET['animal'] == 'GestionAnimaux') : ?>

    <h2>Bienvenue sur la rubrique de gestion des animaux</h2>
        <h3> Vous trouverez ici les informations relatives au distributeur de nourriture et pourrez modifier ses fonctionnalités à votre guise</h3>


    <?php elseif($_GET["animal"] == 'AjouterAnimal') : ?>
        <form autocomplete='off' class='title formPiece' action='modifAnimal.php' method='post'>Nom de l'animal :<br><br>
            <input  type='text' name='nomAnimal' style= 'width : 70%;' maxlength='15'><br><br>
            <input class='button blueButton' style="width:50%;" type='submit' value='Ajouter'>
        </form>

    <?php elseif (isset($_GET['animal'])) : ?>
<div class='case1'>

    <form id="form1" runat="server">
        <input type='file' id="imgInp" />
        <img id="blah" src="ressources/husky.jpg" alt="your image" width=200%>
    </form>

</div>

    <div class='case3'>
        <h4>Informations communiquées par le capteur de nourriture : </h4>
        <h4>Historique des derniers repas :</h4>
        <p>Hier à 10h00</p>
        <p>Hier à 20h00</p>

        <p>Aujourd'hui à 10h00</p>
        <p>Aujourd'hui à 20h00</p>
        <p>Prochain repas programmé aujourd'hui à 20h00</p>

        <?php
        $req = Database::execute('SELECT id,heure FROM nourriture WHERE id_utilisateur = :id_utilisateur',Array('id_utilisateur' => $_SESSION['id']));?>
        <?php if($_GET['animal'] == 'GestionAnimaux') : ?>
        <?php echo "<a href='?nourriture=ModifierNourriture'>Modifier nourriture</a>"; ?>

           <?php if (isset($_GET['nourriture']) && $_GET["nourriture"] == "Ajouter Nourriture")
            echo "<a class='active' href='?animal=AjouterAnimal'>+ Ajouter Nourriture</a>";
           else echo "<a href='?animal=AjouterAnimal'>+ Ajouter Nourriture</a>"; ?>

        <?php if($_GET['nourriture'] == 'ModifierNourriture') : ?>

        <form autocomplete='off' class='title formPiece' action='modifNourriture.php' method='post'>Distribution automatique à l'heure suivante : <br><br>
            <input  type='text' name='Nourriture' style= 'width : 70%;' maxlength='15'><br><br>
            <input class='button blueButton' style="width:50%;" type='submit' value='Ajouter'>
        </form>
            <?php endif ; ?>
        <?php endif ; ?>

        <form class='wrapDeleteButton' action='modifAnimal.php?animal=<?php echo $_GET['animal']; ?>' method='post'>
            <input type='submit' class='button redButton' value="Supprimer l'animal" name='animal'><br>
        </form>
    </div>

<?php endif ; ?>
</div>
<?php include("footer.php"); ?>
</body>
