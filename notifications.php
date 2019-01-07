<!DOCTYPE html>
<html>
<head>
<title>Notifications</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/cssGeneral.css" />
<link rel="stylesheet" href="css/header.css" />
<link rel="stylesheet" href="css/footer.css" />
</head>

<body>


<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
try {
    $bdd = new PDO('mysql:host=localhost;dbname=DomolinkVP', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$result = $bdd->query('SHOW DATABASES');

include ("header.php");


$reponse = Database::execute('SELECT * FROM Notifications WHERE utilisateur_id=:id ORDER BY id DESC', Array(
    'id' => $_SESSION['id']
));

?>

<section>
		<h1>Notifications</h1>


		<table>
			<thead>
				<tr>
					<th>Expediteur</th>
					<th>Objet</th>
					<th>Message</th>
					<th>Date</th>
					<th>Supprimer</th>
				</tr>
			</thead>


			<tbody>
        <?php
        while ($donnees = $reponse->fetch()) {
            ?>
            <tr>
					<td><div class=expediteur><?= $donnees['expediteur']?></div></td>
					<td><div class=objet><?= $donnees['objet']?></div></td>
					<td><div class=message><?= $donnees['message']?></div></td>
					<td><div class=date><?= $donnees['date']?></div></td>
					<td><div class=supprimer>
							<form
								class='wrapDeleteButton'
								action='deletenotification.php?id=<?= $donnees['id']?>'
								method="post">
								<input type="submit" name="supprimer_notification" value="Supprimer">
							</form>
						</div></td>

				</tr>
            <?php
        }
        $reponse->closeCursor();
        ?>
        </tbody>
		</table>

	


</section>


<?php include ("footer.php");?>



</body>

</html>



<style>
section { /* le quadrillage externe */
	border: 3px solid #D52C42; /* Bordure du tableau double et bleue */
	margin: auto; /* Centrer horizontalement le tableau */
	border-radius: 20px;
}

h1 {
	font-family: "Comfortaa-Regular", serif;
	color: #D52C42;
	text-align: center;
}

table {
	margin: auto;
	margin-bottom: 10px;
	border-collapse: collapse;
}

th { /* Les cellules d'en-têtes */
	border: 2px solid #D52C42;
	color: white;
	font-size: 1.2em;
	font-face: "Comfortaa-Bold";
	background-color: #D52C42;
}

td { /* Les cellules normales */
	border: 2px solid #D52C42;
	font-family: "Comfortaa-Regular";
	font-size: 0.95em;
	background-color: #FEE8EE;
	padding: 8px;
	/* Remplissage de 8 pixels pour éviter que le texte touche les bordures */
	vertical-align: middle;
	/* Centrer le contenu des cellules verticalement */
	text-align: center;
	/* Centrer le contenu des cellules horizontalement */
}
</style>