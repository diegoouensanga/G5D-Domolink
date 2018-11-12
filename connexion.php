<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> <!-- UTF-8 permet d'obtenir tous les caractères chinois, arabdes, accents... -->
		<link rel="stylesheet"  href="connexion.css"/>
		<title> DomoLink </title>
</head>
<body>

	<header>
		<p> 
			<img src="logoapp.png" alt="DomoLink" /></br> 
			<em> DomoLink </em> : le top de la maison connectée ! 
		</p>
		
	</header>

	<div class = "Section" > 

		<div class = "Section1" > 

			<div class="sousection1">

			<h2> Connexion </h2>
			<!--</br></br></br></br>-->
			<h3> E-mail : </h3>
				<input type="text" name="e-mail" size="40" required id="uname" style=" height : 30px;" >

			<h3> Mot de passe </h3>
				<input type="password" name="mot de passe" size="40" id="uname" required style=" height : 30px;"> </br></br>
				<button style=" size : 40px;height : 40px;" href ="Gérer son compte.html"> Connexion </button> </br> </br>

			<a class = "oublié" href ="Oublié.html"> Mot de passe oublié </a> 
			</div>
			 
			
		</div> 

		<div class = "Section2"> 

			<h2> S'inscrire </h2>
			<h3> Identifiant : </h3>
				<input type="text" name="prénom" size="40" id="uname" required style=" height : 5%;" >
			 		</br>

			 <h3> E-mail : </h3>
			 	<input type="text" name="e-mail" size="40" id="uname" required style=" height : 5%;" >
			 		</br>

			 <h3> Mot de passe : </h3>
			 	<input type="password" name="mdp" size="40" id="uname" required style=" height : 5%;" >
			 		</br>

			 <h3> Confirmation mot de passe : </h3>
			 	<input type="password" name="confirmation" size="40" id="uname" required style=" height : 5%;" > </br></br>

			 <input type ="checkbox" id ="CGU" unchecked>
			 <label for ="CGU" class = "cgu"> J'accepte les conditions d'utilisations et les mentions légales </label> </br> 
			 	
			 <button style="size : 40px; height: 40px;">Confirmer </button>  </br>
			
		</div> 
	</div>


	<footer>
	</br>
	</br>

		<p> Nous contacter :              
			</br>
		<a href = " mailto:gaellerojat@hotmail.fr">  Envoyer un email </a> </p> 
	</footer>



</body>
</html>