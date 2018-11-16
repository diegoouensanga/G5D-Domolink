<?php
    try {
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=Domolink;charset=utf8', 'root', 'alpine');
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
        if (false){
        $post =  htmlspecialchars($_POST['prenom']); 
        echo $post;
        /*
        $req = $bdd->prepare('INSERT INTO pieces(nom) VALUES(:nom)');
        $req->execute(array(
            'nom' => $post,
        ));
        $reponse = $bdd->query('SELECT LAST_INSERT_ID() AS last_id FROM pieces');
        $data = $reponse ->fetch();*/
        }
        if (empty($_POST['identifiant'])){
            echo "a";

       /*
        $id =  $_GET['piece']; 
        $req = $bdd->prepare('DELETE FROM pieces WHERE id = :id');
        $req->execute(array(
            'id' => $id,
        ));*/
        }
        else {
            echo "ok";
            $identifiant = $_POST['identifiant'];
            echo $identifiant;

            $mdp = $_POST['mdp'];
            echo $mdp;
            $req = $bdd->prepare("INSERT INTO Utilisateurs(identifiant,mdp) VALUES(:identifiant,:mdp)");
            print_r($bdd->errorInfo());

            $req->execute(array(
                'mdp' => $mdp,
                'identifiant' => $identifiant,
            ));
            print_r($bdd->errorInfo());
             echo "<script>
                alert('Problème de connexion à la base de données !');
                window.location.href='connexion.php';
                </script>";

        }
    }
    

?>