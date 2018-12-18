<?php
  if($_SESSION['type'] != 1)
    header("Location:/dashBoard.php");
  if ($_POST['newCGU'])
    Database::execute('UPDATE administration SET cgu = :CGU',Array('CGU' => $_POST['newCGU']));
  if ($_POST['newMentions'])
    Database::execute('UPDATE administration SET mentions_legales = :mentions',Array('mentions' => $_POST['newMentions']));
  $req = Database::execute('SELECT cgu,mentions_legales FROM administration');
  $donnees = $req->fetch();
  $cgu = $donnees['cgu'];
  $mentions = htmlentities($donnees['mentions_legales']);
?>
<div class="wrapper">
    <div class = "cgu">
      <h1>CGU : </h1>
      <?php if($_GET['modifyCGU'] == 'true') : ?>
        <form  action='administration.php?modifyCGU=false&modifyMentions=<?php echo $_GET['modifyMentions']; ?>' method='POST' style="height : 100%;">
          <textarea id='customScroll' name="newCGU"><?php echo $cgu; ?></textarea>
          <input type='submit' class='button' style=" width:40%; margin-left:30%;margin-top: 1%;" value='Sauvegarder'>
        </form>
      <?php else : ?>
        <textarea id='customScroll' readonly><?php echo $cgu; ?></textarea>
        <form  action='administration.php?modifyCGU=true&modifyMentions=<?php echo $_GET['modifyMentions']; ?>' method='POST'>
          <input type='submit' class='button' style=" width:40%; margin-left:30%;margin-top: 1%;" value='Modifier'>
        </form>
      <?php endif ; ?>
    </div>
    <div class = "mentions">
      <h1>Mentions légales :</h1>
      <?php if($_GET['modifyMentions'] == 'true') : ?>
        <form  action='administration.php?modifyCGU=<?php echo $_GET['modifyCGU']; ?>&modifyMentions=false' method='POST' style="height : 100%;">
          <textarea id='customScroll' name="newMentions" ><?php echo $mentions; ?></textarea>
          <input type='submit' class='button' style=" width:40%; margin-left:30%; margin-top: 1%;" value='Sauvegarder'>
        </form>
      <?php else : ?>
          <textarea id='customScroll' name="newMentions" readonly><?php echo $mentions; ?></textarea>
        <form  action='administration.php?modifyCGU=<?php echo $_GET['modifyCGU']; ?>&modifyMentions=true' method='POST'>
          <input  type='submit' class='button' style=" width:40%; margin-left:30%; margin-top: 1%;" value='Modifier' >
        </form>
      <?php endif ; ?>
    </div>
</div>