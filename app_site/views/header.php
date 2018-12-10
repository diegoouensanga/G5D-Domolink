<header>
  <div class="topIcon">
    <a href="gererSonDomicile?piece=VueGenerale" style= "text-decoration: none;">
      <img style= "margin-top: 0px;"draggable="false" src="public/image/logo.png" alt="DomoLink" width=200vw/>
    </a>
    <div class="slogan"></br><em class="slogan compagnie">DomoLink</em> : le top de la maison connectée !</div>
  </div>
  <?php if($_SERVER['PHP_SELF'] != "/connexion.php"): ?>
  <div class="topMenu">
    <div class="menuItem">
      <a href="a"><img draggable="false" src="public/image/aide.png" alt="DomoLink" width = 60vw/></a>
      <a href="default.asp"  class="caption">Aide</a>
    </div>
    <div class="menuItem">
      <a href="a"><img href="default.asp" draggable="false" href="" src="public/image/compte.png" alt="DomoLink" width = 60vw/></a>
      <a href="default.asp" class="caption" >Compte</a>
    </div>
    <!--<div class="menuItem">
      <a href="a"><img href="default.asp" draggable="false" href="" src="administration.png" alt="DomoLink" width = 60vw/></a>         
      <a href="default.asp" class="caption" >Gérer</a>
    </div>-->
    <div class="menuItem">
      <a href="a"><img href="default.asp" draggable="false" href="" src="public/image/accueil.png" alt="DomoLink" width = 60vw/></a>
      <a href="default.asp" class="caption" >Accueil</a>
    </div>
  </div>
<?php endif; ?>
</header>
<style>
@font-face {
  font-family: "Comfortaa-Regular";
  src: url('../public/police/Comfortaa-Regular.ttf');
}
@font-face {
  font-family: "Comfortaa-Bold";
  src: url('Comfortaa-Bold.ttf');
}
header
{
  display : flex;
  width : 100%;
  margin-bottom:2%;
}
.topIcon {
  top : 100px;
  display: inline;
  float: left;
}
.compagnie{
  color : #EF0A0A;
}
.slogan{
  font-family: "Comfortaa-Regular";
  font-size: 1%;
}
.topMenu {
  display: inline;
  margin-left:auto;
  width : 340px;
}
.menuItem {
  float : right;
  width : 20%;
  display : inline-block;
  text-align:center;
  height: 90%;
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
  margin-top: 1%;
}
</style>