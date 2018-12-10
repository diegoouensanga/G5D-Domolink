<!DOCTYPE>
<html>
<?php

//Php pour la connexion
if(isset($_POST['connexion'])) {
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=connexion', 'root', 'Azert7Y7uiop77!');
    $nbre = $bdd->prepare('SELECT identifiant,mdp FROM Utilisateurs WHERE identifiant = :identifiant AND mdp = :mdp');
    $nbre->execute(array('identifiant' => $_POST['identifiant'], 'mdp' => hash('sha256', $_POST['mdp'])));
    $donnee = $nbre->fetch();
    if ($donnee) //vérifier l'existance d'un identifiant
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
    if(!empty($_POST['identifiant']) && !empty($_POST['cgu'])&& !empty($_POST['mail'])&& !empty($_POST['mdp']) && !empty($_POST['confirmation']) && $_POST['mdp'] == $_POST['confirmation'] ) {
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=connexion', 'root', 'Azert7Y7uiop77!');
        $verification = $bdd->prepare('SELECT mail, identifiant FROM Utilisateurs WHERE mail = :mail AND identifiant = :identifiant');
        $verification->execute(array('mail' => $_POST['mail'], 'identifiant'=>$_POST['identifiant']));
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
            $bdd = new PDO('mysql:host=127.0.0.1;dbname=connexion', 'root', 'Azert7Y7uiop77!');
            $req = $bdd->prepare('INSERT INTO Utilisateurs(mdp,identifiant,mail) VALUES(:mdp,:identifiant,:mail)');
            $array = array('identifiant' => $_POST['identifiant'], 'mdp' => hash('sha256', $_POST['mdp']), 'mail' => $_POST['mail']);
            $req->execute($array);
        }
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
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=connexion', 'root', 'Azert7Y7uiop77!');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    $result = $bdd->query('SHOW DATABASES');


    ?>

</head>

<header>

    <?php
    include('header.php');
    ?>

</header>


<div class = "Section" >

    <div class = "Section1" >

        <div class="sousection1">
            <form method ="post">

            <h2> Connexion </h2>
            <!--</br></br></br></br>-->
            <h3> Identifiant : </h3>
            <input type="text" name="identifiant" size="40" required id="uname" style=" height : 30px;" >

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
        <h3> Identifiant : </h3>
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
        <label for ="CGU" class = "cgu"> J'accepte les conditions d'utilisations et les mentions légales </label> </br>

        <input name ="inscription" type ="submit" style="size : 40px; height: 40px;"/>  </br>
        </form>

    </div>

</div>


</body>

<?php
include('footer.php');
?>
</html>