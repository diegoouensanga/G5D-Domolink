<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="ressources/favicon.png"/>
    <link rel="stylesheet" href="css/cssGeneral.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/connexion.css">
    <meta name="description" content="Le top de la maison Connectée !">
    <title>DomoLink</title>
</head>
<?php include("header.php"); ?>
<?php
session_start();
if ($_POST['connexion']) {
    $mdp = hash("sha256", $_POST['mdp']);
    $req = Database::execute('SELECT id,type FROM utilisateurs WHERE mdp = :mdp AND mail = :mail', array('mdp' => $mdp, 'mail' => $_POST['mail']));
    $donnees = $req->fetch();
    if ($donnees) {
        header("Location:/dashBoard.php?piece=VueGenerale");
        $_SESSION['id'] = $donnees['id'];
        $_SESSION['type'] = $donnees['type'];
    } else {
        header("Location:/connexion.php");
    }
}
if ($_POST['inscription']) {
    $mdp = hash("sha256", $_POST['mdp']);
    Database::execute("INSERT INTO Utilisateurs(mail,mdp) VALUES(:mail,:mdp)", array(
        'mdp' => $mdp, 'mail' => $_POST['mail']));
    echo "<script> alert('Enregistrement réussi !');
                window.location.href='connexion.php';
                </script>";
}
?>
<div class="Section">
    <div class="Section1">
        <div class="sousection1">
            <h2 style="font-size: 3vh;"> Connexion </h2>
            <form method="post">
                <h3 style="font-size: 2vh;">Mail :</h3>
                <input type="text" name="mail" required style=" height : 3vh; width: 50%;">
                <h3 style="font-size: 2vh;">Mot de passe :</h3>
                <input type="password" name="mdp" required style=" height : 3vh; width: 50%;"> <br><br>
                <input type="submit" name="connexion" value="Connexion" style="width : 80px; height: 4vh;"><br>
            </form>
            <a class="textBlanc" style="font-size: 2vh;"> Mot de passe oublié </a>
        </div>
    </div>
    <div class="Section2">
        <h2> S'inscrire </h2>
        <h3>CeMac :</h3>
        <form method="post" style="height:100%">
            <input type="text" class="test" name="cemac" maxlength='30'>
            <br>

            <h3>E-mail :</h3>
            <input type="text" name="mail" maxlength='50'>
            <br>

            <h3>Mot de passe :</h3>
            <input type="password" name="mdp" maxlength='50'>
            <br>

            <h3>Confirmation mot de passe :</h3>
            <input type="password" name="mdp2" maxlength='50'> <br><br>

            <input type="checkbox" id="CGU" unchecked>
            <label for="CGU" class="textBlanc"> J'accepte les conditions d'utilisations et les mentions
                légales </label> <br>
            <input type="submit" name="inscription" value="Confirmer" style="size : 40px; height: 400px;"><br>
        </form>
    </div>
</div>
<?php include("footer.php"); ?>