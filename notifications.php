<!DOCTYPE html>
<html>
<head>
<title>Notifications</title>
<meta charset="utf-8" />
</head>

<body>

    <?php include("header.php"); ?>
    
    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=Domolink;charset=utf8', 'root', 'root');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $reponse = $bdd->query('SELECT *, TIME_FORMAT (	heure, "%Hh%i") AS heure, DATE_FORMAT (date, "%d/%m/%Y") AS date FROM Notifications ORDER BY id DESC');

    ?>

	<section>
		<h1>Notifications</h1>


		<table>
			<thead>
				<tr>
					<th>Etat</th>
					<th>Expediteur</th>
					<th>Objet</th>
					<th>Message</th>
					<th>Date</th>
					<th>Heure</th>
					<th>Supprimer</th>
				</tr>
			</thead>


			<tbody>
				<?php
    while ($donnees = $reponse->fetch()) {
        ?>
            	        <tr>
					<td><?php echo $donnees['etat']?></td>
					<td><?php echo $donnees['expediteur']?></td>
					<td><?php echo $donnees['objet']?></td>
					<th><?php echo $donnees['message']?></th>
					<td><?php echo $donnees['date']?></td>
					<td><?php echo $donnees['heure']?></td>
					<td><button>Supprimer</button></td>
				</tr>
				<?php
    }
    $reponse->closeCursor();
    ?>
			</tbody>
		</table>



	</section>







</body>

</html>

<style>
section {
	border: 1px solid #D52C42;
	overflow: auto;
	border-radius: 10px;
}

h1 {
	font-family: "Comfortaa-Bold";
	color: #D52C42;
	text-align: center;
}

table {
	margin-top: 50px;
	margin-left: 30px;
	margin-right: 30px;
	margin-bottom: 10px; 
	border-collapse : collapse;
}

td {
	border: 1px solid black;
	width: 10%;
	padding: 15px;
	text-align: center;
}

th {
	border: 1px solid black;
	padding: 7px;
}

thead {
	font-family: "Comfortaa-Bold";
}
</style>