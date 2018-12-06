<!DOCTYPE>
<html>
<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=connexion', 'root', 'Azert7Y7uiop77!');
//$mdp = sha1($mdp); //Je crypte le mot de passe avec la fonction "sha1"
$nbre = $bdd -> prepare('SELECT id,type FROM Utilisateurs WHERE identifiant = :identifiant AND mdp = :mdp');
$req = $nbre->execute(array ('identifiant'=> $_GET['identifiant'], 'mdp' => $_GET['mdp']));
$donnee = $nbre->fetch();
if($donnee) //vérifier l'existance d'un identifiant
{
    $_SESSION['id'] = $donnee['id'];
    $_SESSION['type'] = $donnee['type'];
    echo 'Vous êtes connectés';
} else {
    echo 'Identifiant / Mot de passe incorrect';
}

if(!empty($_POST['identifiant']) && !empty($_POST['cgu'])&& !empty($_POST['mail'])&& !empty($_POST['mdp']) && !empty($_POST['confirmation']) && $_POST['mdp'] == $_POST['confirmation'] ) {
    echo 'ok';
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=connexion', 'root', 'Azert7Y7uiop77!');
    $req = $bdd->prepare('INSERT INTO Utilisateurs(mdp,identifiant,mail) VALUES(:mdp,:identifiant,:mail)');
    $array = array('identifiant'=>$_POST['identifiant'], 'mdp'=>$_POST['mdp'], 'mail'=>$_POST['mail']);
    print_r($array);
    $req->execute(array('identifiant'=>$_POST['identifiant'], 'mdp'=>$_POST['mdp'], 'mail'=>$_POST['mail']));
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
<body>
<header>
    <p>
        <img src="logoapp.png" alt="DomoLink" /></br>
        <em> DomoLink </em> : le top de la maison connectée !
    </p>

</header>

<div class = "Section" >

    <div class = "Section1" >

        <div class="sousection1">
            <form>

            <h2> Connexion </h2>
            <!--</br></br></br></br>-->
            <h3> Identifiant : </h3>
            <input type="text" name="identifiant" size="40" required id="uname" style=" height : 30px;" >

            <h3> Mot de passe </h3>
            <input type="password" name="mdp" size="40" id="uname" required style=" height : 30px;"> </br></br>
            <input name = "connexion" type = "submit" style=" size : 40px;height : 40px;"/>  </br> </br>

            </form>

            <a class = "oublié" href ="Oublié.html"> Mot de passe oublié </a>
            
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

        <input type ="checkbox" id ="CGU" unchecked name ='cgu'>
        <label for ="CGU" class = "cgu"> J'accepte les conditions d'utilisations et les mentions légales </label> </br>

        <input name ="inscription" type ="submit" style="size : 40px; height: 40px;"/>  </br>
        </form>

    </div>

</div>


<footer>
    </br>
    </br>

    <p> Nous contacter :
        </br>
        <a href = " mailto:gaellerojat@hotmail.fr">  Envoyer un email </a> </p>
</footer>



</body>
</html>