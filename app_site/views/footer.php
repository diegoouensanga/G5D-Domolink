<footer>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Comfortaa" />
    <div class="grille">
        <div class = "location">
            <h3> Où nous trouver ? </h3>
            <p>
                28 rue Notre Dame des Champs </br>
                75006 Paris
            </p>
        </div>

        <div class ="web">
            <h3> Suivez-nous sur les réseaux sociaux </h3>
            <img src="logo%20twitter.png" width="30vw/"> &nbsp;
            <img src="logo%20fb.png" width="45vw/">&nbsp;
            <img src="logo%20insta.png" width="30vw/">
        </div>

        <?php if($_SERVER['PHP_SELF'] != "/connexion.php"): ?>
            <div class ="a_propos">
                <h3>À propos de DomoLink</h3>
                <p>  Projet développé par DomIsep</br>
                    À développer... </p>
            </div>
        <?php endif; ?>
    </div>
</footer>


<style>

    footer
    {
    //background-color: #AD031A;
        height: 20%;
        width: 100%;

    }
    .grille
    {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 5px;
        grid-auto-rows: 100%;
        font-family: Comfortaa;
    }
    .location
    {
        grid-column: 1;
        grid-row: 1;
    }
    .web
    {
        grid-column: 2;
        grid-row: 1;
    }
    .a_propos
    {
        grid-column: 3;
        grid-row: 1;
    }
</style>
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Akhara
 * Date: 10/12/2018
 * Time: 12:43
 */