<?php
    try {
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=test;charset=utf8', 'root', 'alpine');
    } catch(Exception $e) {
        $error = true;
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
        echo "<script>
                alert('Problème de connexion à la base de données !');
                window.location.href='gererSonDomicile?piece=VueGenerale';
              </script>";
    }
    if (!empty($_POST['nomPiece']) && !$error){
        header("Location:/gererSonDomicile?piece={$data['last_id']}");
        $post =  htmlspecialchars($_POST['nomPiece']); 
        $req = $bdd->prepare('INSERT INTO pieces(nom) VALUES(:nom)');
        $req->execute(array(
            'nom' => $post,
        ));
        $reponse = $bdd->query('SELECT LAST_INSERT_ID() AS last_id FROM pieces');
        $data = $reponse ->fetch();
    }
    if (empty($_POST['nomPiece']) && !$error){
        header("Location:/gererSonDomicile?piece=VueGenerale");
        $id =  $_GET['piece']; 
        $req = $bdd->prepare('DELETE FROM pieces WHERE id = :id');
        $req->execute(array(
            'id' => $id,
        ));
    }
?>