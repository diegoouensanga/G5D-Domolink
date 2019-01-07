<!DOCTYPE html>
<html>
<head>
<title>Notifications</title>
<meta charset="utf-8" />
</head>

<body>

    
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

        	<?php
        	if($reponse->rowCount() == 0)
        	{
        	    echo "<p>Il n'y a pas de nouvelle notification</p>";
        	}
        	else
        	{
        	    while ($donnees = $reponse->fetch()) {
            	        ?>
                <button class="buttonA">
    			<span><strong><a href="notifications.php" title="page des notifications"><?php echo $donnees['expediteur']?></strong>
    			<?php echo $donnees['objet'] . '<br />' . $donnees['heure'] . ' : ' . $donnees['date'] . '<br />';
                ?></a></span>
        		</button>
                    <?php
                }
        	}
        
            $reponse->closeCursor();
    
            ?>
        	
    	

	</section>


</body>

<style>
section {
	border: 1px solid #D52C42;
	margin-left: 900px;
	overflow: auto;
	border-radius: 10px;
	grid-row: 1/4;
	grid-column: 7/9;
	margin-right: 3%;
}
h1 {
	font-family: "Comfortaa-Bold";
	color: #D52C42;
	text-align: center;
}
a {
	color: white;
	text-decoration: none;
}
.buttonA {
    width : 100%;
	font-family: "Comfortaa-Regular";
	background-color: #D46372;
	border-radius: 5px;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
	color: white;
}
.buttonA:hover {
	background-color: #D52C42;
}
.buttonA span {
    width : 100%;
	cursor: pointer;
	display: inline-block;
	position: relative;
	transition: 0.5s;
}
.buttonA span:after {
	content: '\00bb';
	position: absolute;
	opacity: 0;
	top: 0;
	right: -10px;
	transition: 0.5s;
}
.buttonA:hover span {
	padding-right: 10px;
}
.buttonA:hover span:after {
	opacity: 1;
	right: 0;
}
</style>