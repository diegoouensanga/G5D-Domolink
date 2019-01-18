<!DOCTYPE html>

<?php
include 'header.php';
?>

<?php
if ($_POST['newMdp'] == $_POST['mdpConfirm']){
    if ($_POST['newMdp'] < 7){
        $noLenght = 'Mot de passe trop court';
    }  else if (!preg_match('#^(?=.*[a-z])(?!=.*[A-Z])(?=.*[0-9])(?=.*\W).{6,}$#', $_POST['newMdp'])) {
        $noConform = 'Mot de passe non conforme';
    } else {
        $testmail = Database::execute('SELECT id,type FROM Utilisateurs WHERE mail = :mail', array('mail' => $_POST['mail']));
        $existeM = $testmail->fetch();
        if ($existeM){
            Database::execute('UPDATE Utilisateurs set mdp = :mdp WHERE mail = :mail',array('mdp'=>$_POST['newMdp'], 'mail'=>$_POST['mail']));
            $valide = 'Votre mot de passe a été changé';
        }
    }
}
?>

<header>
    <meta charset="utf-8"> <!-- UTF-8 permet d'obtenir tous les caractères chinois, arabes, accents... -->
    <link rel="stylesheet"  href="css/activation.css"/>
    <link rel="stylesheet" href="/css/cssGeneral.css"/>
    <title> DomoLink </title>
</header>

<div class = "Section">
    <div class = "SousSection">
        <?php if (isset($valide)) {
            echo $valide;
        }
        ?>
        <h2> Veuillez écrire votre adresse email : </h2>
        <input type="text" name="mail" size="40" id="mail" required style=" height : 5%;" >
        </br></br>
        <h2> Veuillez écrire votre nouveau mot de passe : </h2>
        <input type="text" name="newMdp" size="40" id="newMdp" required style=" height : 5%;" >
        </br></br>
        <?php if (isset($noLenght)) {
            echo $noLenght;
        }
        ?>
        </br></br>
        <h2> Confirmation du mot de passe :</h2>
        <input type="text" name="mdpConfirm" size="40" id="mdpConfirm" required style=" height : 5%;" >
        </br>
        <?php if (isset($noConform)) {
            echo $noConform;
        }
        ?>
        </br>
        <input name ="confirm" id = "confirm" type ="submit" style="size : 40px; height: 40px;"/>  </br>
    </div>
</div>

<?php
include 'footer.php';
?>
