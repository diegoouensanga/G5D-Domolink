<?php
  session_start();
  if(empty($_SESSION['id'])){
    //header("Location:/index.html");
  }
?>
<head>
  <link rel="shortcut icon" href="favicon.png"/>
  <meta charset="utf-8">
  <title>DomoLink</title>
</head>
<body>
<div class="wrapper">
  <div class="topIcon"><a href="gererSonDomicile?piece=VueGenerale"><img draggable="false" src="Logo APP.png" alt="DomoLink" width = 100%/></a></div>
  <div class="topMenu">
  <div class="menuItem">
      <a href="default.asp"><img href="default.asp" draggable="false" href="" src="accueil.png" alt="DomoLink" width = 70%/></a>
      <a href="default.asp" class="caption" >Accueil</a>
    </div>
    <div class="menuItem">
      <a href="default.asp"><img draggable="false" src="notifications.png" alt="DomoLink" width = 70%/></a>
      <a href="default.asp"  class="caption">Notifications</a>
    </div>
    <div class="menuItem">
      <a href="default.asp"><img href="default.asp" draggable="false" href="" src="compte.png" alt="DomoLink" width = 70%/></a>
      <a href="default.asp" class="caption" >Compte</a>
    </div>
    <div class="menuItem">
      <a href="default.asp"><img draggable="false" src="aide.png" alt="DomoLink" width = 70%/></a>
      <a href="default.asp"  class="caption">Aide</a>
    </div>
  </div>
  <div class = "menu">
  <?php
      try {
        $bdd = new PDO('mysql:host=127.0.0.1;dbname=test;charset=utf8', 'root', 'alpine');
        $reponse = $bdd->query('SELECT * FROM pieces');
      } catch(Exception $e) {
        echo "<script>alert('Impossible de se connecter à la base de donnée !');</script>";
      }
      /* Ne pas mettre 2 pièce même nom*/
      if ($_GET["piece"] == "VueGenerale"){
        echo "<a class='first active' href='?piece=VueGenerale'>Vue Générale</a>";
      } else {
        echo "<a class='first' href='?piece=VueGenerale'>Vue Générale</a>";
      }
      while($reponse && $donnees = $reponse->fetch()) {
        if ($donnees['id'] == $_GET["piece"]){
          echo "<a class='active' href='?piece={$donnees['id']}'>{$donnees['nom']}</a>";
        } else {
          echo "<a href='?piece={$donnees['id']}'>{$donnees['nom']}</a>";
        }
      }
      if ($_GET["piece"] == "AjouterPiece"){
        echo "<a class='active last' href='?piece=AjouterPiece'>+ Ajouter Pièce</a>";
      } else {
        echo "<a class='last' href='?piece=AjouterPiece'>+ Ajouter Pièce</a>";
      }
  ?>
  </div>
  <?php if($_GET['piece'] == 'VueGenerale') : ?>
  <?php elseif($_GET["piece"] == 'AjouterPiece') : ?>
    <div class='formPiece'>
      <form autocomplete='off' class='titre' action='modifPiece.php' method='post'> Nom de la pièce :<br><br>
        <input class='entry' type='text' name='nomPiece' value='' maxlength='16'><br><br>
        <input class='button buttonAdd' type='submit' value='Ajouter'>
      </form>
    </div>
  <?php else : ?>
    <div class='capteurs titre'>Capteurs</div>
    <div class='scrollbar scrollCapts' id='customScroll'> 
      <div class='box ajouterBox'></div>
      <div class='box'></div>
      <div class='box'></div>
      <div class='box'></div>
      <div class='box'></div>
      <div class='box'></div>
    </div>
    <div class='actionneurs titre'>Actionneurs</div>
    <div class='scrollbar scrollActs' id='customScroll'>
      <div class='box ajouterBox'></div>
      <div class='box'></div>
      <div class='box'></div>
      <div class='box'></div>
      <div class='box'></div>
      <div class='box'></div>
    </div> 
    <?php echo "<form class='wrapDeleteButton' action='modifPiece?piece={$_GET['piece']}' method='post'>"; ?>
      <input type='submit' class='button buttonDelete' value='Supprimer la pièce' name='piece'>
    </form>
  <?php endif ; ?>
  </div>
</body>
<style>
@font-face {
  font-family: "Comfortaa-Regular";
  src: url('Comfortaa-Regular.ttf');
}
@font-face {
  font-family: "Comfortaa-Bold";
  src: url('Comfortaa-Bold.ttf');
}
.menuItem {
  display : table-cell;
  text-align:center;
  text-decoration: none;
}
.caption {
  font-family: "Comfortaa-Regular";
  display : block;
  font-weight:bold;
  color:#EF0A0A;
  font-size: 1vw;
  margin-top: 4%;
  cursor: pointer;
  text-decoration: none;
}
.entry {
  color:#0063e3;
  width : 100%;
  height: 30px;
  border-radius: 10px;
  border : solid;
  border-width : 1px;
  font-size: 16px;
}
.titre {
  font-family: "Comfortaa-Bold";
  color:#0063e3;
  text-align: center;
  font-size: 1.5vw;
}
.button {
  font-family: "Comfortaa-Bold";
  border-radius: 10px;
  border: none;
  color: white;
  padding: 20px 4px;
  font-size: 1vw;
  cursor: pointer;
  width :100%;
  box-shadow: 0 3px #999;
}
.button:active {
  box-shadow: 0 2px #666;
  transform: translateY(1px);
}
.buttonDelete:hover {
  background-color: #d70909
}
.buttonAdd:hover {
  background-color: #0059CC
}
.buttonDelete {
  background-color: #EF0A0A;
}
.buttonAdd {
  background-color: #0063e3;
}
.scrollbar .box {
  border-radius: 10px;
  background-color: #555;
  width:170px;
  height : 100px;
  display:inline-block;
  margin : 20px;
  
}
.ajouterBox{
  background-image: url("Fond Ajouter Appareil.png");
  background-color: #ffffff;
}
#customScroll::-webkit-scrollbar-track
{
  border-radius: 10px;
  background-color: #F5F5F5;
}
#customScroll::-webkit-scrollbar
{
  height : 4px;
}
#customScroll::-webkit-scrollbar-thumb
{
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
  background-color: #555;
}
.scrollCapts
{
  grid-row : 2;
}
.scrollActs{
  grid-row : 3;
}
.wrapper {
  display: grid;
  grid-template-columns: repeat(7,calc(14.3% - 5px));
  grid-auto-rows: 150px;
  grid-gap: 5px;
}
.wrapDeleteButton {
  grid-column: 5;
  grid-row : 4;
}
.formPiece {
  grid-column: 4;
  grid-row : 2/3;
}
.actionneurs {
  margin-top : 40%;
  grid-column: 3;
  grid-row : 3;
}
.capteurs {
  margin-top : 40%;
  grid-column: 3;
  grid-row : 2;
  
}
.scrollbar {
  grid-column: 4/8;
  overflow-y:hidden;
  overflow-x:scroll;
  width:70%;
  height:150px;
  white-space:nowrap;
  font-size:0;
}
.topMenu {
  margin-top: 15px;
  display : table;
  grid-column: 6/8;
  grid-row : 1;
}
.topIcon {
  grid-column: 1/3;
  grid-row : 1/3;
  width : 90%;
}
.menu{
  grid-column: 1/3;
  margin-left: 20%;
  grid-row : 2/4;
  float:left;
}
.menu a {
  font-size : 1.2vw;
  text-align: center;
  color:#0063e3;
  float: left;
  height: 10%;
  width: 80%;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd; 
  padding : 14px 0px 10px 0px;
}
.menu a.active {
  color:#EF0A0A;
  font-weight:bold;
  width: 100%;
  border-bottom-right-radius: 5px;
  border-top-right-radius: 5px;
}
.menu a:hover {
  background-color: #96BEFF;
}
.menu .last {
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
}
.menu .first {
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}
</style>