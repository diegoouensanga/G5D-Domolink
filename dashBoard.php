<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="ressources/favicon.png"/>
    <link rel="stylesheet" href="css/cssGeneral.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/dashBoard.css">
    <link rel="stylesheet" href="css/notificationsV2.css">
    <meta name="description" content="Le top de la maison Connectée !">
    <title>DomoLink</title>
</head>
<?php include("header.php"); ?>
<?php include("notificationsV2.php"); ?>

<div class="wrapper">
    
    <nav class = "menu">
        <?php
        $req = Database::execute('SELECT id,nom FROM pieces WHERE id_utilisateur = :id_utilisateur',Array('id_utilisateur' => $_SESSION['id']));
        if (isset($_GET['piece']) && $_GET["piece"] == "VueGenerale")
            echo "<a class='active' href='?piece=VueGenerale'><img draggable='false' src='ressources/home.png' alt='IconeMaison'  width=20vw/> Vue Générale</a>";
        else
            echo "<a href='?piece=VueGenerale'><img draggable='false' src='ressources/home.png' alt='IconeMaison'  width=20vw/> Vue Générale</a>";
        while(isset($req) && $donnees = $req->fetch()) {
            if ($donnees['id'] == $_GET["piece"])
                echo "<a class='active' href='?piece={$donnees['id']}'>{$donnees['nom']}</a>";
            else
                echo "<a href='?piece={$donnees['id']}'>{$donnees['nom']}</a>";
        }
        if (isset($_GET['piece']) && $_GET["piece"] == "AjouterPiece")
            echo "<a class='active' href='?piece=AjouterPiece'>+ Ajouter Pièce</a>";
        else
            echo "<a href='?piece=AjouterPiece'>+ Ajouter Pièce</a>";


        echo  " <a href='animaux.php?animal=GestionAnimaux'><img draggable='false' src='ressources/animal-print.png' alt='DomoLink' width=20vw/> Animaux</a>";

        ?>
    </nav>
    <?php if($_GET['piece'] == 'VueGenerale') : ?>
    <?php elseif($_GET["piece"] == 'AjouterPiece') : ?>
    <form autocomplete='off' class='title formPiece' action='modifPiece.php' method='post'>Nom de la pièce :<br><br>
        <input  type='text' name='nomPiece' style= 'width : 70%;' maxlength='15'><br><br>
        <input class='button blueButton' style="width:50%;" type='submit' value='Ajouter'>
    </form>
     <?php elseif (isset($_GET['piece'])) : ?>
    <div class='capteurs title'>Capteurs</div>
    <div class='scrollbar' id='customScroll'>
        <div class='box ajouterBox'></div>
        <div class='box'></div>
        <div class='box'></div>
        <div class='box'></div>
        <div class='box'></div>
        <div class='box'></div>
    </div>
    <div class='actionneurs title'>Actionneurs</div>
    <div class='scrollbar' id='customScroll'>
        <div class='box ajouterBox'></div>
        <div class='box'></div>
        <div class='box'></div>
        <div class='box'></div>
        <div class='box'></div>
        <div class='box'></div>
    </div>
    <form class='wrapDeleteButton' action='modifPiece.php?piece=<?php echo $_GET['piece']; ?>' method='post'>
        <input type='submit' class='button redButton' value='Supprimer la pièce' name='piece'><br>
    </form>

<?php endif ; ?>
</div>
<?php include("footer.php"); ?>