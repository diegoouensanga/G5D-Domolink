<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="default-src 'self';">
    <link rel="shortcut icon" href="ressources/favicon.png"/>
    <link rel="stylesheet" href="css/cssGeneral.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/dashBoard.css">
    <link rel="stylesheet" href="css/notificationV2.css">
    <meta name="description" content="Le top de la maison Connectée !">
    <title>DomoLink</title>
</head>
<?php include("header.php"); ?>
<div class="wrapper">
    <?php include("notificationV2.php"); ?>
    <nav class="menu">
        <?php
        $req = Database::execute('SELECT id,nom FROM Pieces WHERE id_utilisateur = :id_utilisateur', Array('id_utilisateur' => $_SESSION['id']));
        if (isset($_GET['piece']) && $_GET["piece"] == "VueGenerale")
            echo "<a class='active' href='?piece=VueGenerale'>Vue Générale</a>";
        else
            echo "<a href='?piece=VueGenerale'>Vue Générale</a>";
        while (isset($req) && $donnees = $req->fetch()) {
            if ($donnees['id'] == $_GET["piece"])
                echo "<a class='active' href='?piece={$donnees['id']}'>{$donnees['nom']}</a>";
            else
                echo "<a href='?piece={$donnees['id']}'>{$donnees['nom']}</a>";
        }
        if (isset($_GET['piece']) && $_GET["piece"] == "AjouterPiece")
            echo "<a class='active' href='?piece=AjouterPiece'>+ Ajouter Pièce</a>";
        else
            echo "<a href='?piece=AjouterPiece'>+ Ajouter Pièce</a>";

         echo "<a href='animaux.php?animal=GestionAnimaux'>Animaux</a>"
        ?>
    </nav>
    <?php if ($_GET['piece'] == 'VueGenerale') : ?>
        <div class='littleTitle'>Statistiques</div>
        <div class="statsWrapper">
            <div id="divGraph"">
                <canvas id="mensuelle"></canvas>
            </div>
            <div class="divGraph">
                <canvas id="annuelle"></canvas>
            </div>
        </div>
        <div class="statsWrapper">
            <div id="divGraphRoom">
                <canvas id="roomGraph"></canvas>
            </div>
        </div>
    <?php elseif ($_GET["piece"] == 'AjouterPiece') : ?>
        <form autocomplete='off' class='title formPiece' action='modifPiece.php' method='post'>Nom de la pièce :<br><br>
            <input type='text' name='nomPiece' id="nomPiece" maxlength=15><br><br>
            <input class='button blueButton' id="pieceBut" type='submit' value='Ajouter'>
        </form>
    <?php elseif (isset($_GET['piece'])) : ?>
        <div class='littleTitle'>Statistiques</div>
        <div class="statsWrapper">
            <div class="divGraph">
                <canvas id="mensuelle"></canvas>
            </div>
            <div class="divGraph">
                <canvas id="annuelle"></canvas>
            </div>
        </div>
        <div class='littleTitle'>Capteurs</div>
        <div class='scrollbar' id='customScroll'>
            <div class='box ajouterBox'></div>
            <div class='box'></div>
            <div class='box'></div>
            <div class='box'></div>
            <div class='box'></div>
            <div class='box'></div>
        </div>
        <div class='littleTitle'>Actionneurs</div>
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

    <?php endif; ?>
</div>
<?php include("footer.php"); ?>
<script src="libs/jquery-3.3.1.js"></script>
<script src="libs/Chart.js"></script>
<script  data-my_var_1='<?php echo $_SESSION['id'] ;?>'  data-my_var_2='<?php echo $_GET['piece'] ;?>' src="javascript/dashBoard.js" ></script>

