<?php
try {
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=Domolink;charset=utf8', 'root', 'alpine');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
    $reponse = Database::execute('SELECT * FROM Notifications WHERE utilisateur_id=:id',Array('id' => $_SESSION['id']));
?>
<div class="notifications">
    <h1>Notifications</h1>
    <?php
    if($reponse->rowCount() == 0)
        echo "<p>Il n'y a pas de nouvelle notification</p>";
    else
    {
        while ($donnees = $reponse->fetch()) {
            ?>
            <button class="buttonA">
    			<span><strong><a href="notifications.php"><?php echo $donnees['expediteur']?></strong>
                    <?php echo $donnees['message']."<br>".humanDateFormat($donnees['date']) . '<br />';
                    ?></a></span>
            </button>
            <?php
        }
    }
    $reponse->closeCursor();
    ?>
</div>
</body>
<style>
    .notifications {
        grid-row: 1/4;
        height: 100%;
        grid-column: 7/9;
        border: 1px solid #D52C42;
        overflow: auto;
        border-radius: 10px;
        margin-right: 5%;
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
        font-family: "Comfortaa-Regular";
        width : 100%;
        background-color: #D46372;
        border-radius: 5px;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
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