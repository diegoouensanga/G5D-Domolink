<!DOCTYPE html>

<?php
include 'header.php'
?>

<?php
if(isset($_POST['oubli'])) {
    if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) === false) {
        $nonValide = 'adresse email non valide';
    }
    $verification = Database::execute('SELECT mail FROM Utilisateurs WHERE mail = :mail', array('mail' => $_POST['mail']));
    $existe = $verification->fetch();
    if ($existe) {
        $to = $_POST['mail']; $sujet = 'Changement de mot de passe'; $body = 'Bonjour, veuillez changer votre mot de passe en cliquant sur ce lien : <a href ="activation.php'. '"> Changement de mot de passe</a>';
        mail($to,$sujet,$body);
        $done =  'Votre nouveau mot de passe vous a été envoyé par mail';
    } else {
        $erreur = 'Vous navez pas de compte';

    }
}
?>


<head>
    <meta charset="utf-8"> <!-- UTF-8 permet d'obtenir tous les caractères chinois, arabes, accents... -->
    <link rel="stylesheet"  href="css/oublie.css"/>
    <link rel="stylesheet" href="/css/cssGeneral.css"/>
    <title> DomoLink </title>

</head>




<div class = "section">
    <div class = "sousection">
        <div class = "text">
            <form method ="post">
            <br>
                <div class="nonValide">
                    <?php if (isset($nonValide)) {
                        echo $nonValide;
                    }
                    ?>
                </div>
            <h2> Veuillez écrire votre adresse email : </h2>
            <input type="text" name="mail" size="40" id="mail" required style=" height : 5%;" >
            </br></br>
                <div class="done">
                    <?php if (isset($done)) {
                        echo $done;
                    }
                    ?>
                </div>
                <div class="error">
                    <?php if (isset($erreur)) {
                        echo $erreur;
                    }
                    ?>
                </div>
            <input name ="oubli" id = "oubli" type ="submit" style="size : 40px; height: 40px;"/>  </br>
            </form>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>


