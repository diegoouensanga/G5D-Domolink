<?php
/**
 * Created by PhpStorm.
 * User: Rémi
 * Date: 09/12/2018
 * Time: 16:36
 */
include ("Planning.php");

if ($_GET['cause_rdv'] == "panne"){
    $planning = new Planning(1,5,540,1080,60);
    $planning -> Afficher();
}elseif ($_GET['cause_rdv'] == "installation"){
    $planning = new Planning(1,5,540,1080,60);
    $planning -> Afficher();
}elseif ($_GET['cause_rdv'] == "Devis"){
    $planning = new Planning(1,5,540,1080,60);
    $planning -> Afficher();
}elseif ($_GET['cause_rdv'] == "autre"){
    $planning = new Planning(1,5,540,1080,60);
    $planning -> Afficher();
}