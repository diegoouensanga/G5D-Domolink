<script src="libs/jquery-3.3.1.js"></script>
<script src="javascript/generalJS.js"></script>
<script src="javascript/societe.js"></script>
<?php
if($_SESSION['type'] != 2){
    header('Location: dashBoard.php?piece=VueGenerale');
    die();
}
if (!empty($_POST['sauvegarder'])) {
    $file = file_get_contents($_FILES['logo']['tmp_name']);
    $array = Array(
        'nom' => $_POST['nom'],
        'slogan' => $_POST['slogan'],
        'telephone' => $_POST['telephone'],
        'mail' => $_POST['mail'],
        'adresse' => $_POST['adresse'],
        'societe' => $_POST['societe'],
        'facebook' => $_POST['facebook'],
        'twitter' => $_POST['twitter'],
        'instagram' => $_POST['instagram']
    );
    if (!empty($_FILES['logo']['tmp_name'])) {
        unlink("ressources/Logo.png");
        file_put_contents("ressources/Logo.png", $file);
    }
    Database::execute('UPDATE Administration SET nom =:nom,slogan =:slogan , telephone =:telephone, mail=:mail , adresse =:adresse , societe =:societe , facebook =:facebook , twitter =:twitter , instagram =:instagram', $array);
    header("Location: administration.php");
    die();
}
$req = Database::execute('SELECT nom,societe,telephone,slogan,adresse,mail,facebook,twitter,instagram FROM Administration');
$donnees = $req->fetch();
?>
<form method="post" enctype="multipart/form-data" action="administration.php">
    <div class="adminWrapper">
        <div class="champs">
            <div class="champ"><label class="title2">Nom :</label><input type="text" name="nom" maxlength='50'
                                                                         value=<?php echo "'" . $donnees['nom'] . "'"; ?>/>
            </div>
            <div class="champ"><label class="title2">Société :</label><input type="text" name="societe" maxlength='50'
                                                                             value=<?php echo "'" . $donnees['societe'] . "'"; ?>/>
            </div>
            <div class="champ"><label class="title2">Téléphone :</label><input type="text"
                                                                               name="telephone" maxlength='10'
                                                                               id="telephone"
                                                                               value=<?php echo "'" . $donnees['telephone'] . "'"; ?>>
            </div>
            <div class="champ"><label class="title2">Adresse :</label><input type="text" name="adresse" maxlength='50'
                                                                             value=<?php echo "'" . $donnees['adresse'] . "'"; ?>/>
            </div>
            <div class="champ"><label class="title2">Slogan :</label><input type="text" name="slogan" maxlength='50'
                                                                            value=<?php echo "'" . $donnees['slogan'] . "'"; ?>/>
            </div>
            <div class="champ"><label class="title2">E-Mail :</label><input type="text" name="mail" maxlength='50'
                                                                            value=<?php echo "'" . $donnees['mail'] . "'"; ?>/>
            </div>
            <div class="champ"><label class="title2">Facebook :</label><input type="text" name="facebook"
                                                                              maxlength='2083'
                                                                              value=<?php echo "'" . $donnees['facebook'] . "'"; ?>/>
            </div>
            <div class="champ"><label class="title2">Twitter :</label><input type="text" name="twitter" maxlength='2083'
                                                                             value=<?php echo "'" . $donnees['twitter'] . "'"; ?>/>
            </div>
            <div class="champ"><label class="title2">Instagram :</label><input type="text" name="instagram"
                                                                               maxlength='2083'
                                                                               value=<?php echo "'" . $donnees['instagram'] . "'"; ?>/>
            </div>
        </div>
        <div class="image">
            <div class="champ"><label class="title2" id="labelLogo">Logo :</label><input type="file"
                                                                                         name="logo" id="logo"
                                                                                         id="inputLogo"/><label
                        id="erreurText"></label></div>
            <img class="logo" alt="Logo" src="ressources/Logo.png"/>
        </div>
    </div>
    <input type='submit' class='button adminButton' value='Sauvegarder'
           name="sauvegarder" id="sauvegarder">
</form>