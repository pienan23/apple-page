<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion_etudiant";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$rrr = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Inscriptions - UTT LOKO</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <a href="index.html" class="logo"><img src="assets/css/lokoo.png" alt=""> <span></span></a>
        <div class="langue" style="font-size: 12px; margin-top: 15px; margin-left: 800px;">
            <a href="#" class="button" style="height: 30px;"><p>Français</p></a>
            <a href="#" class="button" style="height: 30px;"><p>English</p></a>
        </div>
        <nav>
            <a href="#menu">Menu</a>
        </nav>

    </header>

    <!-- Menu -->
    <nav id="menu">
        <ul class="links">
            <li><a href="index.html">Accueil</a></li>
            <li><a href="generic.php">Inscription</a></li>
            <li><a href="galerie_FR/galerie.html">Galerie</a></li>
            <li><a href="filiere.html">Filières</a></li>
            <li><a href="emploi.html">Emploi du temps</a></li>
            <li><a href="foum/forum.php">Campus</a></li>
            <li><a href="form.php">Contactez-nous</a></li>
            <li><a href="landing.html">A propos</a></li>
        </ul>
        <!-- <ul class="actions stacked">
            <li><a href="#" class="button primary fit">Get Started</a></li>
            <li><a href="#" class="button fit">Log In</a></li>
        </ul> -->
    </nav>

    <!-- Main -->
    <!-- <div id="main" class="alt"> -->

    <!-- One -->
    <!-- <section id="one">
        <div class="inner">
            <header class="major">
                <h1>Generic</h1>
            </header>
            <span class="image main"><img src="images/pic11.jpg" alt="" /></span>
            <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fergiat. Pellentesque in mi eu massa lacinia malesuada et a elit. Donec urna ex, lacinia in purus ac, pretium pulvinar mauris. Curabitur sapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dapibus rutrum facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam tristique libero eu nibh porttitor fermentum. Nullam venenatis erat id vehicula viverra. Nunc ultrices eros ut ultricies condimentum. Mauris risus lacus, blandit sit amet venenatis non, bibendum vitae dolor. Nunc lorem mauris, fringilla in aliquam at, euismod in lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In non lorem sit amet elit placerat maximus. Pellentesque aliquam maximus risus, vel sed vehicula.</p>
            <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis. Praesent rutrum sem diam, vitae egestas enim auctor sit amet. Pellentesque leo mauris, consectetur id ipsum sit amet, fersapien risus, commodo eget turpis at, elementum convallis elit. Pellentesque enim turpis, hendrerit tristique lorem ipsum dolor.</p>
        </div>
    </section>

</div> -->
    <section style="margin-left: 55px; margin-right:55px;">
        <h1 style="text-align:center;margin-top: 115px;">Inscription sur le forum</h1>
        <form method="POST" action="inscriptionn.php">
            <div class="fields">
                <div class="field half">
                    <label for="nom_etudiant">Nom</label>
                    <input type="text" name="nom_etudiant" id="name" />
                </div>
                <div class="field half">
                    <label for="prenom_etudiant">Prénoms</label>
                    <input type="text" name="prenom_etudiant" id="prename" />
                </div>
                <div class="field half">
                    <label for="email_etudiant">Adresse mail</label>
                    <input style="margin-bottom: 50px;" type="text" name="email_etudiant" id="email" />
                </div>
                <div class="field half">
                    <label for="mdp_etudiant">Mot de passe</label>
                    <input type="password" name="mdp_etudiant" id="mdp_etudiant" />
                </div>
            <ul class="actions" style="margin-left: 55px;">
                <li><a href="connexionn.php"><input type="button" value="Se connecter" class="primary" /></a></li>
                <li><input type="submit" value="Valider" class="primary" name="benreg";/></li>
                <li><input type="reset" value="Effacer" /></li>
            </ul>
            <?php
            function ok()
            {
                echo "Inscription reussie";
                set_time_limit(3);
            }
            if(isset($_POST['benreg']))
            {
                $nom = $_POST['nom_etudiant'];
                $prenom = $_POST['prenom_etudiant'];
                $mail = $_POST['email_etudiant'];
                $mp = $_POST['mdp_etudiant'];

                $req = "INSERT INTO forum (nom_etudiant,prenom_etudiant,email_etudiant,mdp_etudiant) VALUES ('$nom', '$prenom', '$mail', '$mp')";
                $res = mysqli_query($rrr,$req);

                if($res)
                {
                    echo "Enregistré avec succès !";
                }
                else
                {
                    echo "Echec de l'inscription...";
                }

            }
            ?>
        </form>
    <section/>


<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <!--<ul class="icons">
            <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Université LOKO</li><li>Design: GROUPE 7</li>
        </ul>-->
    </div>
</footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>