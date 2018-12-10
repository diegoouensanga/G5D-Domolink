    <link rel="stylesheet" href="views/CSS/style1.css">
    <link rel="stylesheet" href="views/CSS/style2.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />
<div class = "wrapper">
    <div class ='header'>
        <?php include ("header.php"); ?>
    </div>
    <div class="menu">
        <nav>
            <p><a href="index.php?action=prise_de_rdv">Prise de rendez-vous</a></p>
            <p><a href="index.php?action=signaler_une_panne">Formulaire de panne</a></p>
            <p><a href="index.php?action=faq">Les questions fréquentes</a></p>
            <p><a href="index.php?action=messagerie"> Messagerie </a>
        </nav>
    </div>
    <div class="corps">
        <h1>Prise de rendez-vous</h1>
        <p>
            <label> <h3> Cause : </h3>
                <label><input type="radio" name="cause_rdv" value="panne">Panne</label>
                <label><input type="radio" name="cause_rdv" value="installation">Installation</label>
                <label><input type="radio" name="cause_rdv" value="devis">Devis</label>
                <label><input type="radio" name="cause_rdv" value="autre">Autres</label>
            </label> <br><br>
            <label> <h3>Date :</h3> <br>
                <input type="date" name="date" JJ/MM/AAAA >
            </label> <br><br>
            <label> <h3> Heure : </h3>
                <select name="heure">
                    <option value = "matin">9h à 12h</option>
                    <option value = "debutap">13h à 15h</option>
                    <option value = "finap">15 à 18h</option>
                </select>
            </label> <br>
            <a href="index.php?action=conf_rdv"> Valider  </a>
        </p>
    </div>
</div>
    <?php include ("footer.php"); ?>
</body>
</html>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Akhara
 * Date: 12/11/2018
 * Time: 13:17
 */
?>