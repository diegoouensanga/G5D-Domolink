    <link rel="stylesheet" href="views/CSS/ style1.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />
<div class = "wrapper">
    <div class ='header'>
        <?php include ("header.php"); ?>
    </div>
    <div class="menu">
        <nav>
            <p><a href="index.php?action=signaler_une_panne">Formulaire de panne</a></p>
            <p><a href="index.php?action=faq">Les questions fréquentes</a></p>
            <p><a href="index.php?action=contact">Contact</a></p>
            <p><a href="index.php"> Home</a> </p>
        </nav>
    </div>
    <div class="corps">
        <h1>Prise de rendez-vous</h1>
        <p>
            <label> Cause :
                <select name="cause_rdv">
                    <option value = "panne">Panne</option>
                    <option value = "installation">Installation</option>
                    <option value = "devis">Devis</option>
                    <option value = "autre">Autre</option>
                </select>
            </label> <br>

            <label> Jour de la semaine :
                <select name="cause_rdv">
                    <option value = "lundi">Lundi</option>
                    <option value = "mardi">Mardi</option>
                    <option value = "mercredi">Mercredi</option>
                    <option value = "jeudi">Jeudi</option>
                    <option value = "vendredi">Vendredi</option>
                </select>
            </label> <br>
            <label> Jour de la semaine :
                <select name="heure">
                    <option value = "matin">9h à 12h</option>
                    <option value = "debutap">13h à 15h</option>
                    <option value = "finap">15 à 18h</option>
                </select>
            </label> <br>
            <button>Valider</button>
        </p>
    </div>
</div>
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