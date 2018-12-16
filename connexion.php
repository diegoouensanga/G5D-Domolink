<!DOCTYPE>
<?php
include 'header.php';
?>

<html>
<?php

//Php pour la connexion
if(isset($_POST['connexion'])) {
    $nbre = Database::execute ('SELECT mdp,mail FROM Utilisateurs WHERE mdp = :mdp AND mail = :mail',array('mail'=>$_POST['mail'],'mdp' => hash('sha256', $_POST['mdp'])) );
    $donnee = $nbre->fetch();
    if ($donnee) //vérifier l'existance d'un email
      {
          $_SESSION['id'] = $donnee['id'];
          $_SESSION['type'] = $donnee['type'];
          echo 'Vous êtes connectés';
      } else {
        echo 'Identifiant / Mot de passe incorrect';
      }
}

//Php pour l'inscription
if ($_POST['inscription']){
    if(!empty($_POST['cMAC']) && !empty($_POST['cgu'])&& !empty($_POST['mail'])&& !empty($_POST['mdp']) && !empty($_POST['confirmation']) && $_POST['mdp'] == $_POST['confirmation'] ) {
        $verification = Database::execute ('SELECT mdp,mail,cMAC FROM Utilisateurs WHERE mail = :mail AND cMAC = :cMAC AND mdp = :mdp',array('mail' => $_POST['mail'], 'cMAC' => $_POST['cMAC'], 'mdp' => hash('sha256', $_POST['mdp'])) );
        $existe = $verification->fetch();
        if ($existe){
            echo 'Vous avez déjà un compte';
        } else if ($_POST['mdp'] !== $_POST['confirmation']){
            echo 'les mots de passe ne correspondent pas, veuillez rééssayer';
        } else if (strlen($_POST['mdp'])<5){
            echo'Mot de passe trop court';
        } else if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) === false) {
            echo 'adresse email non valide';
        } else {
            print_r($_POST);
            $req = Database::execute ('INSERT INTO mdp,mail,cMAC FROM Utilisateurs WHERE mail = :mail AND cMAC = :cMAC AND mdp = :mdp',array('mail' => $_POST['mail'], 'cMAC' => $_POST['cMAC'], 'mdp' => hash('sha256', $_POST['mdp'])) );
        }
        echo 'a';
    }
}
?>

<head>
    <meta charset="utf-8"> <!-- UTF-8 permet d'obtenir tous les caractères chinois, arabes, accents... -->
    <link rel="stylesheet"  href="connexion.css"/>
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



<div class = "Section" >

    <div class = "Section1" >

        <div class="sousection1">
            <form method ="post">

            <h2> Connexion </h2>
            <!--</br></br></br></br>-->
            <h3> Adresse e-mail : </h3>
            <input type="text" name="mail" size="40" required id="uname" style=" height : 30px;" >

            <h3> Mot de passe </h3>
            <input type="password" name="mdp" size="40" id="uname" required style=" height : 30px;"> </br></br>
            <input name = "connexion" type = "submit" style=" size : 40px;height : 40px;"/>  </br> </br>

            </form>

            <a class = "oublié" href ="oublie.php"> Mot de passe oublié </a>
            
        </div>

    </div>

    <div class = "Section2">
        <form method="post">
        <h2> S'inscrire </h2>
        <h3> Numéro cMAC : </h3>
        <input type="text" name="identifiant" size="40" id="uname" required style=" height : 5%;" >
        </br>

        <h3> E-mail : </h3>
        <input type="text" name="mail" size="40" id="uname" required style=" height : 5%;" >
        </br>

        <h3> Mot de passe : </h3>
        <input type="password" name="mdp" size="40" id="uname" required style=" height : 5%;" >
        </br>

        <h3> Confirmation mot de passe : </h3>
        <input type="password" name="confirmation" size="40" id="uname" required style=" height : 5%;" > </br></br>

        <input type ="checkbox" id ="CGU" unchecked name ='cgu' required = "required">
            <label for ="CGU" class = "Cgu"> <a href = "cgu.php" class = "cgu"> J'accepte les conditions d'utilisations </a> </label> </br></br>

        <input name ="inscription" type ="submit" style="size : 40px; height: 40px;"/>  </br>
        </form>

    </div>

</div>


<?php
include 'footer.php';
?>



</html>