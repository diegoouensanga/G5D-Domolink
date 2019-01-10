<!DOCTYPE html>
<html>
<head>
<title>Notifications</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/Notifications2.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />
</head>

<body>


    
    <?php
    
    

    $reponse = Database::execute('SELECT * FROM Notifications WHERE utilisateur_id=:id ORDER BY id DESC', Array('id' => $_SESSION['id']));
    

    ?>
    
    <section>
		<h1>Notifications</h1>

        	<?php
        if ($reponse->rowCount() == 0) {
            echo "<p>Il n'y a pas de nouvelle notification</p>";
        } else {
            while ($donnees = $reponse->fetch()) {
                ?>
                <button class="buttonA">
        			<span><strong><a href="notifications.php"><?php echo $donnees['expediteur']?></strong>
                    	<?php echo $donnees['objet'] . "<br>" . $donnees['date'] . '<br />';
                        ?></a></span>
    			</button>
                <?php
            }
        }

        $reponse->closeCursor();

        ?>
        	
    	

	</section>


</body>

