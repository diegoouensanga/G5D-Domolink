<!DOCTYPE html>
<html>
<head>
    <title>Notifications</title>
    <meta charset="utf-8" />
</head>

<body>



<?php

include("header.php");
$reponse = Database::execute('SELECT * FROM Notifications WHERE utilisateur_id=:id ORDER BY id DESC',Array('id' => $_SESSION['id']));
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
                <td><?php echo $donnees['expediteur']?></td>
                <td><?php echo $donnees['objet']?></td>
                <th><?php echo $donnees['message']?></th>
                <td><?php echo $donnees['date']?></td>
                <td><button>Supprimer</button></td>
            </tr>
            <?php
        }
        $reponse->closeCursor();
        ?>
        </tbody>
    </table>



</section>






<?php include("footer.php"); ?>
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