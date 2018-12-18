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
        echo "<div class='noNotification'>Il n'y a pas de Notification.</div>";
    else
    {
        while ($donnees = $reponse->fetch()) {
            ?>
            <a href="notifications.php">
            <button class="buttonA">
                <span><strong><?php echo $donnees['expediteur']?></strong>
                    <?php echo $donnees['objet']."<br>".humanDateFormat($donnees['date']) . '<br />';
                    ?></span>
            </button></a>
            <?php
        }
    }
    $reponse->closeCursor();
    ?>
</div>