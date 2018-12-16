<!DOCTYPE>
<?php
include 'header.php';
?>
<html>

<?php
if(isset($_POST['mail'])) {
    if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) === false) {
        echo 'adresse email non valide';
    }
    $verification = Database::execute('SELECT mail FROM Utilisateurs WHERE mail = :mail', array('mail' => $_POST['mail']));
    $existe = $verification->fetch();
    if ($existe) {
        mail($_POST['mail'], 'nouveau mot de passe', 'Votre nouveau mot de passe est : ');
        echo 'Votre nouveau mot de passe vous a été envoyé par mail';
    }
}
?>

<head>
    <meta charset="utf-8"> <!-- UTF-8 permet d'obtenir tous les caractères chinois, arabes, accents... -->
    <link rel="stylesheet"  href="oublie.css"/>
    <title> DomoLink </title>
    <?php
    try
    {
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=Domolink', 'root', 'Azert7Y7uiop77!');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    $result = $bdd->query('SHOW DATABASES');


    ?>
</head>


<div class = "section">
    <div class = "sousection">
        <div class = "text">
            <form method ="post">
            <br>
            <h2> Veuillez écrire votre adresse email : </h2>
            <input type="text" name="mail" size="40" id="uname" required style=" height : 5%;" >
            </br></br>
            <input name ="inscription" type ="submit" style="size : 40px; height: 40px;"/>  </br>
            </form>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>


</html>