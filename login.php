<?php
    session_start();
     try {
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=Domolink;charset=utf8', 'root', 'alpine',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    } catch(Exception $e) {
        $error = true;
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
        echo "<script>
                alert('Problème de connexion à la base de données !');
                window.location.href='gererSonDomicile?piece=VueGenerale';
              </script>";
    }
    if (!$error){
        echo "c";
        $identifiant = $_POST['identifiant'];
        echo $identifiant;
        $mdp = $_POST['mdp'];
        echo "t";
        echo $mdp;
        $req = $bdd->prepare('SELECT id FROM utilisateurs WHERE mdp = :mdp AND identifiant = :identifiant');
        $req->execute(array('mdp' => $_POST['mdp'], 'identifiant' => $_POST['identifiant']));
        $donnees = $req->fetch();
        if ($donnees) {
            header("Location:/gererSonDomicile?piece=VueGenerale.php");
            $_SESSION['id'] = $donnees['id'];
            echo $_SESSION['id'];

        }
    }
?>