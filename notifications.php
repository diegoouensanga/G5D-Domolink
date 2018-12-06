<!DOCTYPE html>
<html>
<head>
<title>Notifications</title>
<meta charset="utf-8" />
</head>


    <?php include("header.php"); ?>
    
    <?php

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=Notifications;charset=utf8', 'root', 'root');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    /*
     * $reponse = $bdd->query('SELECT Provenance, Objet, Date FROM Notifications');
     *
     * while ($donnees = $reponse->fetch()) {
     * echo $donnees['Provenance'];
     * }
     *
     * $reponse->closeCursor();
     */

    $pdoStat = $bdd->prepare('SELECT Provenance, Objet, Date FROM Notifications');

    $executeIsOk = $pdoStat->execute();

    $notifs = $pdoStat->fetchAll();

    echo $notifs['Objet'];

    ?>
    
    <ul>
    	<?php foreach ($notifs as $notifs): ?>
    	
    		<li>
    			<?= $notifs['Provenance']?><?= $notifs['Objet']?><?= $notifs['Date']?>
    		</li>
    	<?php endforeach; ?>
    
    
    </ul>





<body>

	<section>
		<h1>Notifications</h1>
		<table>
			<thead>
				<tr>
					<th>Nom</th>
					<th>Objet</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>

			</tbody>
		</table>

	</section>







</body>

</html>

<style>
section {
	border: 1px solid black;
	margin-left: 900px;
	overflow: auto;
}

h1 {
	text-align: center;
}

table {
	text-align: justify;
}
</style>