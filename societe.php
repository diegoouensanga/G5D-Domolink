<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="javascript/societe.js"></script>
<?php
if ($_POST['sauvegarder']) {
    header("Location:/administration.php");
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
    if ($_FILES['logo']['tmp_name']) {
        unlink("ressources/Logo.png");
        file_put_contents("ressources/Logo.png", $file);
    }
    Database::execute('UPDATE administration SET nom =:nom,slogan =:slogan , telephone =:telephone, mail=:mail , adresse =:adresse , societe =:societe , facebook =:facebook , twitter =:twitter , instagram =:instagram', $array);
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
                                                                               oninput="this.value=this.value.replace(/(?![0-9])./gmi,'')"
                                                                               name="telephone" maxlength='50'
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
            <div class="champ"><label class="title2">Facebook :</label><input type="text" name="facebook" maxlength='2083'
                                                                            value=<?php echo "'" . $donnees['facebook'] . "'"; ?>/>
            </div>
            <div class="champ"><label class="title2">Twitter :</label><input type="text" name="twitter" maxlength='2083'
                                                                            value=<?php echo "'" . $donnees['twitter'] . "'"; ?>/>
            </div>
            <div class="champ"><label class="title2">Instagram :</label><input type="text" name="instagram" maxlength='2083'
                                                                            value=<?php echo "'" . $donnees['instagram'] . "'"; ?>/>
            </div>
        </div>
        <div class="image">
            <div class="champ"><label class="title2" style='display: inline;'>Logo :</label><input type="file"
                                                                                                   name="logo" id="logo"
                                                                                                   style="width:45%;"/><label
                        id="erreurText" style=' width:35%; color:red;'></label></div>
            <img class="logo" alt="Logo" src="ressources/Logo.png"/>
        </div>
    </div>
    <input type='submit' class='button' value='Sauvegarder' style="width : 20%; margin-left : 40%; margin-top :1%;"
           name="sauvegarder" id="sauvegarder">
</form>