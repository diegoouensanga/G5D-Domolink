</div>
<footer>
    <div class="footer_location">
        <h3> Nous contacter </h3>
        Adresse : <?php echo $donneesAdmin['adresse']; ?><br>
        Téléphone : <?php echo $donneesAdmin['telephone']; ?><br>
        E-Mail: <a style="color :#0063e3;"
                   href="mailto:<?php echo $donneesAdmin['mail']; ?>"><?php echo $donneesAdmin['mail']; ?></a><br>
    </div>
    <div class="footer_social">
        <h3> Suivez-nous sur les réseaux sociaux </h3>
        <a href=<?php echo $donneesAdmin['twitter']; ?>><img src="ressources/Icons/Twitter.png" width="30vw"
                                                             alt="Twitter Icon">Twitter</a><br>
        <a href=<?php echo $donneesAdmin['facebook']; ?>><img src="ressources/Icons/Facebook.png" width="30vw"
                                                              alt="Facebook Icon">Facebook</a><br>
        <a href=<?php echo $donneesAdmin['instagram']; ?>><img src="ressources/Icons/Instagram.png" width="30vw"
                                                               alt="Instagram Icon">Instagram</a>
    </div>
    <div class="footer_description">
        <h3>À propos de DomoLink</h3>
        Site de <?php echo $donneesAdmin['nom']; ?><br>
        Un projet de la société <?php echo $donneesAdmin['societe']; ?><br>
        <a onclick="display('mentions_legales')">Conditions Générales d'utilisation</a><br>
        <a onclick="display('cgu')">Mentions Légales</a><br>
    </div>
</footer>

<script src="javascript/infoformationView.js"></script>