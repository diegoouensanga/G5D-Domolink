<?php 
    try {
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=test;charset=utf8', 'root', 'alpine');
    } catch(Exception $e) {
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    }
    
    $reponse = $bdd->query('SELECT * FROM pieces');
    $array = Array();
    while($donnees = $reponse->fetch()) {
        $array = $array + Array($donnees['id'] => $donnees['nom']);
    }
    echo json_encode($array);



        
    

?>