<header>
  <div class="topIcon">
    <a href="gererSonDomicile?piece=VueGenerale" style= "text-decoration: none;">
      <img style= "margin-top: 0px;"draggable="false" src="Logo APP.png" alt="DomoLink" width=200vw/>
    </a>
    <div class="slogan"></br><em class="slogan compagnie">DomoLink</em> : le top de la maison connectée !</div>
  </div>
  <?php if($_SERVER['PHP_SELF'] != "/connexion.php"): ?>
  <div class="topMenu">
    <div class="menuItem">
      <a href="a"><img draggable="false" src="aide.png" alt="DomoLink" width = 60px/></a>
      <a href="default.asp"  class="caption">Aide</a>
    </div>
    <div class="menuItem">
      <a href="a"><img href="default.asp" draggable="false" href="" src="compte.png" alt="DomoLink" width = 60px/></a>
      <a href="default.asp" class="caption" >Compte</a>
    </div>
    <!--<div class="menuItem">
      <a href="a"><img href="default.asp" draggable="false" href="" src="administration.png" alt="DomoLink" width = 60vw/></a>         
      <a href="default.asp" class="caption" >Gérer</a>
    </div>-->
    <div class="menuItem">
      <a href="a"><img href="default.asp" draggable="false" href="" src="accueil.png" alt="DomoLink" width = 60px/></a>         
      <a href="default.asp" class="caption" >Accueil</a>
    </div>
  </div>
<?php endif; ?>
</header>
<style>
@font-face {
  font-family: "Comfortaa-Regular";
  src: url('Comfortaa-Regular.ttf');
}
@font-face {
  font-family: "Comfortaa-Bold";
  src: url('Comfortaa-Bold.ttf');
}
header
{
  height : 10%;
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
  width : 100%;
  font-size: 9px;
}
.topMenu {
  display: inline;
  margin-left:auto;
  width : 440px;
}
.menuItem {
  min-width : 60px;
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