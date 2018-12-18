<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="ressources/favicon.png"/>
    <link rel="stylesheet" href="css/cssGeneral.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/administration.css">
    <meta name="description" content="Le top de la maison Connectée !">
    <title>DomoLink</title>
</head>
<?php
include("header.php");
switch ($_SESSION['type']) {
    case 1:
        include("legal.php");
        break;
    case 2:
        include("societe.php");
        break;
    default :
        header("Location:/dashBoard.php?piece=VueGenerale");
}
include("footer.php");