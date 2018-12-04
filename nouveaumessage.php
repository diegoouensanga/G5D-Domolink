<!DOCTYPE html>
<html>
    <head>
        <title>Notifications</title>
        <meta charset="utf-8" />
    </head>
    <style>

  #message
  {
  width: 100%;
  height:300px;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}
#objet {
margin-top:10px;
margin-bottom:10px;
    width:50%;
}
#destinataire{

}
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
            <p><a href="priserdv.php">Prise de rdv</a></p>
            <p><a href="formpanne.php">Formulaire de panne</a></p>
            <p><a href="faq.php">Foire aux questions</a></p>
            <?php include("menumessagerie.php"); ?>
            
        </nav>


    </div>
    <div id="affichage"><h1> Nouveau message  </h1>

<label for="desinataire">Destinataire :  </label>


 <select id="destinataire" name="destinataire">
      <option value="Jean  Boursin">Jean Boursin (jean.boursin @gmail.com)</option>
      <option value="Michel Vianot">Michel Vianot (m.vianot@hotmail.fr)</option>
      <option value="Patrick Wang">Patrick Wang (pwang@yahoo.fr)</option>
      <option value="Nouveau contact">Nouveau contact</option>

    </select>
     
    <br>
<label for="objet">Objet :  </label>

    <input type="text" id="objet"  placeholder="Exemple : Rendez-vous technicien vendredi 18 novembre">
<br>
    <label for="message">Message :  </label>
    <br>
    <textarea id="message" placeholder="Exemple : Bonjour, je souhaitais vous contacter à propos de..."></textarea>
<br>
<button id="envoyer"> Envoyer </button>

 </div>
    <div id="four"></div>
    <div id="five"></div>
    <div id="six"></div>
    <div id="seven"></div>
    <div id="eight"></div>
</div>





</body>
</html>