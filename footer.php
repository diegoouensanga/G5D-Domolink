</div>
<footer>
    <div class="grille">
        <div class = "location">
            <h3> Nous contacter </h3>
                Adresse : <?php echo $donneesAdmin['adresse']; ?></br>
                Téléphone : <?php echo $donneesAdmin['telephone']; ?></br>
                E-Mail: <a style= "color :#0063e3;" href ="mailto:<?php echo $donneesAdmin['mail']; ?>"><?php echo $donneesAdmin['mail']; ?></a></br>

        </div>

        <div class ="web" style="color:#0063e3;">
            <h3 style="color :#D52C42;"> Suivez-nous sur les réseaux sociaux </h3>
            <a href="#" style="color :#0063e3; text-decoration:none;"><img src="ressources/Icons/Twitter.png" width="30vw">Twitter</a><br>
            <a href="#" style="color :#0063e3; text-decoration:none;"><img src="ressources/Icons/Facebook.png" width="30vw">Facebook</a><br>
            <a href="#" style="color :#0063e3; text-decoration:none;"><img src="ressources/Icons/Instagram.png" width="30vw">Instagram</a>
        </div>

        <?php if($_SERVER['PHP_SELF'] != "/connexion.php"): ?>
            <div class ="a_propos">
                <h3>À propos de DomoLink</h3>
                Site de <?php echo $donneesAdmin['nom']; ?></br>
                    Un projet de la société <?php echo $donneesAdmin['societe']; ?><br>
                <a onclick="displayMentions()" style="color :#D52C42; cursor: pointer;">Conditions Générales d'utilisation</a><br>
                <a onclick="displayCGU()" style="color :#D52C42; cursor: pointer;">Mentions Légales</a><br>
            </div>
        <?php endif; ?>
    </div>
</footer>

<script>
    function displayMentions() {
        var myWindow = window.open("", "DomoLink", "width=2000,height=1000");
        myWindow.document.write("<!DOCTYPE html>\n" +
            "<head>\n" +
            "  <meta charset=\"UTF-8\">\n" +
            "  <title>Mentions Légales</title>\n" +
            "</head>");
        myWindow.document.write("<?php
            $cgu = preg_replace("/\r\n|\r|\n/",'<br/>',$donneesAdmin['mentions_legales']);
            echo $cgu;
            ?>");
    }
    function displayCGU() {
        var myWindow = window.open("", "DomoLink", "width=2000,height=1000");
        myWindow.document.write("<!DOCTYPE html>\n" +
            "<head>\n" +
            "  <meta charset=\"UTF-8\">\n" +
            "  <title>Conditions Générales d'utilisation</title>\n" +
            "</head>");
        myWindow.document.write("<?php
            $cgu = preg_replace("/\r\n|\r|\n/",'<br/>',$donneesAdmin['cgu']);
            echo $cgu;
            ?>");
    }
</script>
<style>
    a{
        text-decoration: underline;
    }
    img{
        vertical-align: middle;
    }
    footer {
        border-top : 1px solid #D52C42;
        color :#D52C42;
        width: calc(100% - 8px);
        position: absolute;
        left: 0;
        padding: 4px;
    }
    .grille
    {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 5px;
        grid-auto-rows: 100%;
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
    h3 {
        font-family: "Comfortaa-Bold";
        font-weight: bold;
        margin-top : 0px;
        margin-bottom : 5px;
    }
</style>