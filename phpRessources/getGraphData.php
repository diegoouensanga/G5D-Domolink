<?php
include("../fonctions.php");
if ($_POST['idCanva'] == "roomGraph"){
    $req = DataBase::execute("SELECT ListPieces.nom,Statistiques.datas FROM (SELECT Pieces.nom, Pieces.id, Pieces.id_utilisateur  FROM Pieces WHERE  Pieces.id_utilisateur = :id) as ListPieces LEFT OUTER JOIN Statistiques ON (Statistiques.owner_type = 'piece' AND Statistiques.owner_id =ListPieces.id AND Statistiques.espacement = 'mensuelle')", Array("id" => $_POST['id']));
    $labels =Array();
    $donnees = Array();
    while ($datas = $req->fetch()){
        $array = json_decode($datas['datas'],true);
        $total = 0;
        if (isset($array)){
            foreach ($array as $value){
                $total = $total +$value;
            }
        }
        array_push($labels,$datas['nom']);
        array_push($donnees,$total);
    }
    echo json_encode(array("type" => "bar","datas" =>  $donnees,"labels" =>  $labels,"id"=>$_POST['idCanva'],"title"=>"par pièce"));
} else {
    $req = DataBase::execute("SELECT * FROM Statistiques WHERE espacement = :esp AND owner_id = :id AND owner_type = :ownerType", Array( "esp" => $_POST['idCanva'], "id" => intval($_POST['id']), "ownerType" => $_POST['ownerType']));
    $datas = $req->fetch();
    $array = json_decode($datas['labels'],true);
    $array2 = json_decode($datas['datas'],true);
    echo json_encode(array("type" => "line","datas" =>  $array2,"labels" =>  $array,"id"=>$_POST['idCanva'],"title"=>$_POST['idCanva']));
}