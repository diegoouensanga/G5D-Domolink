<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="ressources/favicon.png"/>
  <link rel="stylesheet" href="cssGeneral.css">
  <meta name="description" content="Le top de la maison Connectée !">
  <title>DomoLink</title>
</head>
<?php
  require_once("fonctions.php");
  session_start();
  if(empty($_SESSION['id']) && !($_SERVER['REQUEST_URI']== "/connexion.php")){
    header("Location:/connexion.php");
  }
  else {
    $req2 = Database::execute('SELECT nom,societe,telephone,slogan,adresse,mail,cgu,mentions_legales FROM administration',null);
    $donneesAdmin = $req2->fetch();
}
?>

<body>
<div class="contenu">
<header>
  <div class="topIcon">
    <a href="gererSonDomicile.php?piece=VueGenerale" style= "text-decoration: none;">
      <img draggable="false" src="ressources/Logo.png" alt="DomoLink" width=200vw/>
    </a>
    <div class="slogan"></br><em class="slogan compagnie"><?php echo $donneesAdmin['nom']; ?></em> : <?php echo $donneesAdmin['slogan']; ?></div>
  </div>
  <?php if($_SERVER['PHP_SELF'] != "/connexion.php"): ?>
  <div class="topMenu">
    <?php if($_SESSION['type'] == 0): ?>
    <div class="menuItem">
    </div>
    <?php endif; ?>
    <div class="menuItem">
      <a href="gererSonDomicile.php?piece=VueGenerale"><img draggable="false" href="" src="ressources/accueil.png" width = 60%/></a>
      <a href="gererSonDomicile.php?piece=VueGenerale" class="caption" >Mon Domicile</a>
    </div>
    <?php if($_SESSION['type'] != 0): ?>
    <div class="menuItem">
      <a href="administration.php"><img  draggable="false" src="ressources/administration.png" width =60%/></a>
      <a href="administration.php" class="caption" >Gérer</a>
    </div>
    <?php endif; ?>
    <div class="menuItem">
      <a href="compte.php?action=infos"><img href="default.asp" draggable="false" href="" src="ressources/compte.png" width =60%/></a>
      <a href="compte.php?action=infos" class="caption" >Compte</a>
    </div>
    <div class="menuItem">
      <a href="index.php"><img draggable="false" src="ressources/aide.png" alt="DomoLink" width =60%/></a>
      <a href="index.php"  class="caption">Aide</a>
    </div>
  </div>
  <?php endif; ?>
</header>
<style>
    html {
        height: 100%;
    }
    body {
        min-height: 100%;
    }
    .contenu {
        min-height:calc(100vh - 240px);
        height:100%;
        padding-bottom: 120px;
    }
header
{
  display : flex;
  margin-bottom:20px;
    padding: 4px;
}
.topIcon {
  display: inline;
  float: left;
}
.compagnie{
  color : #EF0A0A;
}
.slogan{
  font-family: "Comfortaa-Regular";
  width : 100%;
  font-size: 9px;
  white-space: nowrap;
  overflow: hidden;
}
.topMenu {
  display:flex;
  align-items:center;
  margin-left:auto;
  width : 360px;
  min-width : 120px;
}
.menuItem {
  vertical-align: middle;
  width : 25%;
  display : table-cell;
  text-align:center;
  transform: translateY(5%);
}
.caption {
  font-family: "Comfortaa-Regular";
  display : block;
  font-weight:bold;
  color:#EF0A0A;
  font-size: 12px;
  cursor: pointer;
  text-decoration: none;
}
</style>