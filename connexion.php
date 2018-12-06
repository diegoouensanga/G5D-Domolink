<?php include("header.php"); ?>
<div class = "Section" > 
		<div class = "Section1" > 
			<div class="sousection1">
			<h2 style= "font-size: 3vh;"> Connexion </h2>
			<h3 style= "font-size: 2vh;">Identifiant :</h3>
				<form action="login.php" method="post">
					<input type="text" name="identifiant" required  style=" height : 3vh; width: 50%;" >
			<h3 style= "font-size: 2vh;">Mot de passe :</h3>
				<input type="password" name="mdp" required style=" height : 3vh; width: 50%;"> </br></br>
				<input type="submit" value="Connexion" style="width : 80px; height: 4vh;"></br>
				</form>
			<a class = "textBlanc" href ="Oublié.html" style= "font-size: 2vh;"> Mot de passe oublié </a> 
			</div>
		</div> 
		<div class = "Section2"> 
			<h2> S'inscrire </h2>
			<h3>Identifiant :</h3>
			<form action="signup.php" method="post" style="height:100%">
				<input type="text" class="test" name="identifiant" maxlength='30' >
			 		</br>

			 <h3>E-mail :</h3>
			 	<input  type="text" name="e-mail" maxlength='50' >
			 		</br>

			 <h3>Mot de passe :</h3>
			 	<input type="password" name="mdp"  maxlength='50'>
			 		</br>

			 <h3>Confirmation mot de passe :</h3>
			 	<input type="password" name="mdp2"  maxlength='50'> </br></br>

			 <input type ="checkbox" id ="CGU" unchecked>
			 <label for ="CGU" class = "textBlanc"> J'accepte les conditions d'utilisations et les mentions légales </label> </br> 
			 <input type="submit" value="Confirmer" style="size : 40px; height: 400px;"></br>
			</form>
		</div> 
	</div>
	<footer>
	</br>
	</br>
		<p> Nous contacter :              
			</br>
		<a href = " mailto:gaellerojat@hotmail.fr">support.domolink@domolink.fr</a> </p> 
	</footer>
</body>
</html>
<style>
input[type=text],input[type=password] {
	line-height: 1.3;
	height : 5%;
	width:50%;
}
h2, h3{
	color : white;
	position: center ;
}
.Section {
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	grid-gap: 5px;
	grid-auto-rows: 80%;
}
.Section1 {
	grid-column: 1;
	grid-row: 1;
	background: #AD031A;
	border: 1px solid #AD031A;
	text-align: center;
	font-size: 1vw;
	position: relative;
	height: 110%;
}
.textBlanc{
	color : white;
}
.sousection1 {
	height : 60%;

	position: absolute; 

	transform: translateY(30%);
	width: 100%;
}
.Section2  {
	grid-column: 2;
	grid-row: 1;
	background: #AD031A;
	border: 1px solid #AD031A;
	text-align: center ;
	font-size: 13px;
	height: 110%;
}
em {
	color : red;
}
</style>