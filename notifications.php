<!DOCTYPE html>
<html>
<head>
<title>Notifications</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/cssGeneral.css" />
<link rel="stylesheet" href="css/header.css" />
<link rel="stylesheet" href="css/footer.css" />
<link rel="stylesheet" href="css/Notifications.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />
</head>

<body>


<?php


include ("header.php");


$reponse = Database::execute('SELECT * FROM Notifications INNER JOIN Utilisateurs ON Notifications.utilisateur_id=Utilisateurs.id ORDER BY :id DESC', Array(
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


