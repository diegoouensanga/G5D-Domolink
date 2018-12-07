<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<?php 
  include("header.php");
  if ($_POST['infoSubmit']){
    $array = Array(
      'identifiant' => $_POST['identifiant'],
      'mail' => $_POST['mail'],
      'nom'  => $_POST['nom'],
      'prenom'  => $_POST['prenom'],
      'telephone'  => $_POST['telephone'],
      'pays'  => $_POST['pays'],
      'postal'  => $_POST['postal'],
      'ville'  => $_POST['ville'],
      'rue'  => $_POST['rue'],
      'numeroRue'  => $_POST['numeroRue'],
      'autres'  => $_POST['autres'],
      'id' => $_SESSION['id']
    );
    if ($_POST['naissance']){
      $date = $_POST['naissance'];
      $match = Array();
      preg_match('/[0-9]{2}-[0-9]{2}-[0-9]{4}/',$date,$match);
      if (count($match) == 1){
        $array['naissance']=SQLDateFormat($date);
        Database::execute('UPDATE Utilisateurs SET  identifiant =:identifiant , mail=:mail ,nom =:nom , prenom=:prenom , naissance=:naissance , telephone=:telephone, pays =:pays, postal=:postal, ville=:ville , rue=:rue, numeroRue=:numeroRue, autres=:autres WHERE id=:id ' ,$array);
      }      
    }
    if (!array_key_exists ('naissance',$array))
      Database::execute('UPDATE Utilisateurs SET identifiant =:identifiant , mail=:mail ,nom =:nom , prenom=:prenom , telephone=:telephone, pays =:pays, postal=:postal, ville=:ville , rue=:rue, numeroRue=:numeroRue, autres=:autres WHERE id=:id ' ,$array);
  } else if ($_POST['mdpChange']){
      $req = Database::execute('SELECT mdp FROM Utilisateurs WHERE id=:id',Array('id' => $_SESSION['id']));
      $donnees = $req->fetch();
      if (hash("sha256",$_POST['actualMDP'])==$donnees['mdp'])
        Database::execute('UPDATE Utilisateurs SET mdp=:mdp WHERE id=:id ' ,Array('mdp'=>hash("sha256",$_POST['newMDP']),'id' => $_SESSION['id']));
      else
          echo "<script>alert('Le pseudo actuel ne correspond pas.')</script>";
  } else if ($_POST['accountDelete']) {
    Database::execute('DELETE FROM Utilisateurs WHERE id = :id' ,Array('id' => $_SESSION['id']));
    session_destroy();
    header("Location:/connexion.php");
  }
  $req = Database::execute('SELECT identifiant,naissance,nom,prenom,pays,mail,mdp,ville,telephone,postal,rue,numeroRue,autres FROM Utilisateurs WHERE id=:id',Array('id' => $_SESSION['id']));
  $donnees = $req->fetch();
?>
<form autocomplete='off' action="compte.php?action=<?php echo $_GET['action']; ?>" method='POST'>
<div class="accountWrapper">
  <div class ="menu">
    <?php 
      $actionsList = Array( 'infos' => 'Informations personnelles', 'changeMDP' => 'Modifier le mot de passe', 'delete' => 'Supprimer le compte', 'logout' => 'Déconnexion');
      foreach ($actionsList as $key => $value){
        if(isset($_GET['action']) && $_GET["action"] == $key)
              echo "<a class='active' href='?action={$key}'>{$value}</a>";
            else
          echo "<a href='?action={$key}'>{$value}</a>";
      }
    ?>
  </div>
  <?php if($_GET["action"] == "infos"): ?> 
    <div class = "leftWrapper">
        <div class='title'>Informations personelles</div><br>
        <label class="title2" >Identifiant :</label><br>
        <input  type='text' name='identifiant' maxlength='15' value=<?php echo "'".$donnees['identifiant']."'"; ?>/><br>
        <label class="title2" >Adresse e-mail :</label><br>
        <input  type='text' name='mail' maxlength='15' placeholder="jean.dupont@gmail.com" value=<?php echo "'".$donnees['mail']."'"; ?>/><br>
        <div class="title2" >Nom :</div><br>
        <input  type='text' name='nom' maxlength='15' placeholder="Dupont" value=<?php echo "'".$donnees['nom']."'"; ?>/><br>
        <div class="title2" >Prénom :</div><br>
        <input  type='text' name='prenom' maxlength='15' placeholder="Jean" value=<?php echo "'".$donnees['prenom']."'"; ?>/><br>
        <label class="title2" >Date de Naissance :</label><br>
        <input  type='text' name='naissance' maxlength='10' placeholder="28-09-1993" onclick="deleteDate()" id="naissance" value=<?php echo "'".humanDateFormat($donnees['naissance'])."'"; ?>/><br>
        <label class="title2" >Numéro de téléphone :</label><br>
        <input  type='text' name='telephone' maxlength='10' placeholder="0636303630" oninput="checkNum(this)" value=<?php echo "'".$donnees['telephone']."'"; ?>/><br>
    </div>
    <div class = "midWrapper">
        <div class='title'>Adresse</div><br>
        <label class="title2" >Pays :</label><br>
            <input  type='text' name='pays' maxlength='15' placeholder="France" value=<?php echo "'".$donnees['pays']."'"; ?>/><br>
            <label class="title2" >Code Postal :</label><br>
            <input  type='text' name='postal' maxlength='5' placeholder="75017" oninput="checkNum(this)" value=<?php echo "'".$donnees['postal']."'"; ?>/><br>
            <label class="title2" >Ville :</label><br>
            <input  type='text' name='ville'  maxlength='15' placeholder="Paris" value=<?php echo "'".$donnees['ville']."'"; ?>/><br>
            <label class="title2" >Rue :</label><br>
            <input  type='text' name='rue'  maxlength='120' placeholder="Rue de la paix" value=<?php echo "'".$donnees['rue']."'"; ?>/><br>
            <label class="title2" >Numéro de rue :</label><br>
            <input  type='text' name='numeroRue'  maxlength='6' placeholder="15" oninput="checkNum(this)" value=<?php echo "'".$donnees['numeroRue']."'"; ?>/><br>
            <label class="title2" >Autres informations :</label><br>
            <input  type='text' name='autres'  maxlength='100' placeholder="2 ème étage, au fond à droite." value=<?php echo "'".$donnees['autres']."'"; ?>/><br>
            <input class='button blueButton' style="width:50%;margin-left:25%; margin-top : 5%;" type='submit' name="infoSubmit" value='Sauvegarder'>
    </div>
  <?php elseif($_GET["action"] == "changeMDP"): ?>
    <div class = "midWrapper">
        <div class='title'>Changer de Mot de Passe</div><br><br>
        <label class="title2" >Mot de passe actuel :</label><br><br>
            <input  type='password' name='actualMDP' id='actualMDP'  maxlength='15'><br><br>
            <label class="title2" >Nouveau mot de passe :</label><br><br>
            <input  type='password' name='newMDP' id="newMDP" maxlength='15'><br><br>
            <label class="title2" >Confirmation du mot de passe :</label><br><br>
            <input  type='password' name='confNewMDP' id="confNewMDP"  maxlength='15'><br><br>
            <input class='button blueButton' style="width:50%;margin-left:25%; margin-top : 10%;" type='submit' value='Valider' name="mdpChange" id="mdpChange" onclick="validateMDPChange()">
    </div>
  <?php elseif($_GET["action"] == "delete"): ?>
    <div class = "midWrapper">
      <form autocomplete='off' action='modifCompte.php' method='post'>
        <div class='title' style="color:#EF0A0A;">Supprimer le compte</div><br><br>
        <label class="title2" style="width:100%; text-align:center; color:#EF0A0A;">Entrez votre identifiant : </label><br><br>
            <input  type='text' name='identifiant' id="identifiant" maxlength='15'><br><br>
            <input class='button redButton' style="width:50%;margin-left:25%;" name="accountDelete" id='accountDelete' type='submit' value='Supprimer'>
          </form>
    </div>
  <?php elseif($_GET["action"] == "logout"): ?>
    <?php 
      session_destroy();
      echo "<script> window.location.replace('connexion.php') </script>"
    ?>
  <?php endif; ?>
    <div class = "rightWrapper">
        <span id="errorText"></span>
    </div>
</div>
</form>
<script>
function checkNum(elmnt){
  elmnt.value=elmnt.value.replace(/(?![0-9])./gmi,'');
}
function deleteDate(elmnt){
  $('#naissance').val("");
}
$(document).ready(function(){
  $('#mdpChange').click(function(){
      if ($('#newMDP').val() == $('#confNewMDP').val()){
          return true;
      } else {
          span = document.getElementById("errorText");
          txt = document.createTextNode("Les mots de passes ne sont pas identiques.");
          if (!span.firstChild)
            span.appendChild(txt);
          return false;
      }
  });
  $('#accountDelete').click(function(){
      if ($('#identifiant').val() == "<?php echo $donnees['identifiant'];?>"){
        return true;
      } else {
        return false;
      }
  });
  $('#naissance').on('keydown', function() {
    var key = event.keyCode || event.charCode;
    var string = $('#naissance').val();
    if(key == 8 || key == 37 || key ==39)
        return true;
    else {
      if (event.key == "-" && (string.length == 2 || string.length == 5 ))
        return true;
      if ('0123456789'.indexOf(event.key) == -1)
        return false;
      else {
        if (string.length == 2 || string.length == 5 )
          string = string+"-";
        $('#naissance').val(string);
      return true;
      }
    }
  });
});
</script>
</body>
</html>
<style type="text/css">
body,html{
  height:100%;
  width:100%;
}
input[type="text"],input[type="password"]{
  margin-bottom:4%;
  width:70%;margin-left:15%;
}
.title2{
  width:100%; 
    text-align:center;
  margin-bottom:2%;
  width:100%;
}

.accountWrapper {
  display: grid;
  grid-template-columns: repeat(4,calc(25% - 15px));
  grid-auto-rows: 100%;
  grid-gap: 15px;
  height : 80%;
}
.menu{
  grid-column: 1;
  margin-left: 5%;
  grid-row : 1;
}
.leftWrapper {
  grid-column : 2;
}
.midWrapper {
  grid-column : 3;
}
.rightWrapper {
    grid-column : 4;
    color: red;
    height : 80%;
}
</style>