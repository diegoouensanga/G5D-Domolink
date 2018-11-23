<!DOCTYPE html>
<html>
<head>
  <style>

  #message
  {
  width: 50%;
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
</style>

</head>
<body>
<?php include("header.php"); ?>
<?php include("menumessagerie.php"); ?>

<h1> Nouveau message  </h1>

<label for="desinataire">Destinataire :  </label>


 <select id="destinataire" name="destinataire">
      <option value="Jean  Boursin">Jean Boursin</option>
      <option value="Michel Vianot">Michel Vianot</option>
      <option value="Patrick Wang">Patrick Wang</option>

    </select>
      <button id="ajoutcontact"> Ajouter un contact </button>
    <br>
<label for="objet">Objet :  </label>

    <input type="text" id="objet"  placeholder="Exemple : Rendez-vous technicien vendredi 18 novembre">
<br>
    <label for="message">Message :  </label>
    <br>
    <textarea id="message" placeholder="Exemple : Bonjour, je souhaitais vous contacter à propos de..."></textarea>
<br>
<button id="envoyer"> Envoyer </button>


</body>
</html>