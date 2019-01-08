<!DOCTYPE html >
<head>
    <meta charset="utf-8"> <!-- UTF-8 permet d'obtenir tous les caractères chinois, arabes, accents... -->
    <link rel="stylesheet" href="css/cssGeneral.css"/>
    <link rel="stylesheet" href="connexion.css"/>
    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
    <title> DomoLink </title>
</head>
<?php
include("header.php");
if (isset($_POST['connexion'])) {
    $nbre = Database::execute('SELECT id,type FROM Utilisateurs WHERE mail = :mail AND mdp = :mdp', array('mail' => $_POST['mail'], 'mdp' => hash('sha256', $_POST['mdp'])));
    $donnee = $nbre->fetch();
    $erreur = "";
    if ($donnee) //vérifier l'existance d'un email et du mot de passe correspondant
    {
        $_SESSION['id'] = $donnee['id'];
        $_SESSION['type'] = $donnee['type'];
        header('Location:/dashBoard.php');
    } else {
        $erreur= 'Identifiant / Mot de passe incorrect !';
    }
}
if ($_POST['inscription']) {
    if (!empty($_POST['cMAC']) && !empty($_POST['cgu']) && !empty($_POST['mail']) && !empty($_POST['mdp']) && !empty($_POST['confirmation'])) {
        $testmail = Database::execute('SELECT id,type FROM Utilisateurs WHERE mail = :mail', array('mail' => $_POST['mail']));
        $existeM = $testmail->fetch();
        $testcMAC = Database::execute('SELECT id,type FROM Utilisateurs WHERE cMAC = :cMAC', array('cMAC' => $_POST['cMAC']));
        $existeMAC = $testcMAC->fetch();
        if ($existeM){
            $alreadyMail=  'Vous avez déjà un compte';
        }
        else if ($existeMAC){
            $alreadycMAC= 'Vous avez déjà un compte';
        }
        else if ($_POST['mdp'] !== $_POST['confirmation']){
            $wrongmdp= 'les mots de passe ne correspondent pas, veuillez rééssayer';
        } else if (strlen($_POST['mdp'])<7){
            $noSize='Mot de passe trop court';
        } else if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) === false) {
            $noMail= 'adresse email non valide';
        } else {
            $req = Database::execute('INSERT INTO Utilisateurs(mdp,mail,cMAC) VALUES(:mdp,:mail,:cMAC)', array('mail' => $_POST['mail'], 'cMAC' => $_POST['cMAC'], 'mdp' => hash('sha256', $_POST['mdp'])));
            header('Location:/dashBoard.php');
        }
    }
}
?>


<div class="Section">

    <div class="Section1">

        <div class="sousection1">
            <form method="post">
                <h2> Connexion </h2>

                <div class = "erreur">
                    <?php if($erreur) {
                        echo $erreur;
                    }?>
                </div>
                <!--</br></br></br></br>-->
                <h3> Adresse e-mail : </h3>
                <input type="text" name="mail" size="40" required id="mailcon" style=" height : 30px;">

                <h3> Mot de passe </h3>
                <input type="password" name="mdp" size="40" id="mdpcon" required style=" height : 30px;"> <br><br>
                <input name="connexion" type="submit" id="connexion" style=" size : 40px;height : 40px;"/>  <br> <br>
            </form>

            <a class="oublié" href="oublie.php"> Mot de passe oublié </a>

        </div>

    </div>

    <div class="Section2">
        <form method="post">
            <h2> S'inscrire </h2>

            <div class = "dejaCompte">
                <?php if($alreadyMail||$alreadycMAC){
                    echo $alreadycMAC;
                    echo $alreadyMail;
                }
                ?>
            </div>

            <h3> Numéro cMAC : </h3>
            <input type="text" name="cMAC" size="40" id="cMAC" required style=" height : 5%;">
            <br>

            <h3> E-mail : </h3>
            <input type="text" name="mail" size="40" id="mail" required style=" height : 5%;"><br>
            <div class = "noMail">
                <?php if ($noMail){
                    echo $noMail;
                }
                ?>
            </div>
            <br>

            <h3> Mot de passe : </h3>
            <input type="password" name="mdp" size="40" id="mdp" required style=" height : 5%;"><br>
            <div class = "tropCourt">
                <?php if ($noSize){
                    echo $noSize;
                }
                ?>
            </div>
            <br>

            <h3> Confirmation mot de passe : </h3>
            <input type="password" name="confirmation" size="40" id="confirmation" required
                   style=" height : 5%;"> <br>
            <div class = "wrongMdp">
                <?php if ($wrongmdp){
                    echo $wrongmdp;
                }
                ?>
            </div><br>

            <input type="checkbox" id="cgu" unchecked name='cgu' required="required">
            <label for="CGU" class="Cgu"> <a class="cgu" onclick="display('cgu')"> J'accepte les conditions
                    d'utilisations </a>
            </label> <br><br>
            <input type = "hidden" name = "inscription" value = "hock">
            <input name="inscription" id="inscription" type="submit" style="size : 40px; height: 40px;"/>  </br>
        </form>

    </div>

</div>

<?php
include 'footer.php';
?>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="javascript/connexion.js"></script>
<script src="javascript/infoformationView.js"></script>-->




