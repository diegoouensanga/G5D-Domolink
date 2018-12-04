<!DOCTYPE html>
<html>
    <head>
        <title>Notifications</title>
        <meta charset="utf-8" />
    </head>
    <style>
.container{
	display:grid;
	grid-template-columns:1fr 2fr 1fr;
	grid-auto-rows: 10em;
}
    .menuaide{

    }
   



#header {
    grid-column: 1 / 4;
    margin-bottom: 10px;
}

#two {
    grid-row: 2 / 4;
}

#five {
    grid-column: 2 / 4;
}

#six {
    grid-column: 1 / 3;
}

#eight {
    grid-column: 1 / 4;
}
</style>




    <body>
<div class="container">
    <div id="header"><?php include("header.php"); ?></div>


    <div id="menuaide">
<nav>
            <p><a href="faq.php">Foire aux questions</a></p>
            <p><a href="formpanne.php">Formulaire de panne</a></p>
            <p><a href="nouveaumessage.php">Contact</a></p>
            
        </nav>


    </div>
    <div id="affichage"><div class="five">
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
    </div></div>
    <div id="four"></div>
    <div id="five"></div>
    <div id="six"></div>
    <div id="seven"></div>
    <div id="eight"></div>
</div>
