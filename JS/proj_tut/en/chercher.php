<?php
require_once  "co.php";
$mc = "null";
if(isset($_POST['recherche']))
{
    $mc = $_POST['recherche'];
}
$req = "SELECT * FROM etudiants WHERE MATRICULE LIKE '%$mc%' OR NOM LIKE '%$mc%' OR PRENOMS LIKE '%$mc%' OR FILIERE LIKE '%$mc%' OR NIVEAU LIKE '%$mc%'";
$resu = mysqli_query($coo,$req) or die(mysqli_error());
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Registrations - UTT LOKO</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <a href="index.html" class="logo"><img class="looo" src="assets/css/lokoo.png" alt=""> <span></span></a>
        <div class="langue" style="font-size: 12px; margin-top: 15px; margin-left: 800px;">
            <a href="../chercher.php" class="button" style="height: 30px;"><p>Français</p></a>
            <a href="chercher.php" class="button" style="height: 30px;"><p>English</p></a>
        </div>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>

    <!-- Menu -->
    <nav id="menu">
        <ul class="links">
            <li><a href="index.html">Home</a></li>
            <li><a href="generic.php">Registrations</a></li>
            <li><a href="galerie_FR/galerie.html">Gallery</a></li>
            <li><a href="filiere.html">Courses</a></li>
            <li><a href="foum/forum.php">Forum</a></li>
            <li><a href="form.php">Contact us</a></li>
            <li><a href="landing.html">About</a></li>
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
    <section style="margin-top: 50px;" >
        <form method="post" action="chercher.php">
            <div class="rec" style="display: flex;">
                <label for="recherche" style="margin-top: 10px;">Search : </label>
                <input style="width: 500px; /*background-color: darkslategray;*/" type="text" name="recherche" id="recherche" placeholder="Enter your search here..."/>
                <input type="submit" value="Search" name="btnrecherche">
            </div>
        </form>

        <table style="text-align: center; margin-top: 50px;">
            <thead>
            <th style="text-align: center; font-size: 16px;">REG. NUMBER</th><th style="text-align: center; font-size: 16px;">LAST NAME</th><th style="text-align: center; font-size: 16px;">FIRST NAME</th><th style="text-align: center; font-size: 16px;">BIRTHDAY</th><th style="text-align: center; font-size: 16px;">MAIL</th><th style="text-align: center; font-size: 16px;">PHONE</th><th style="text-align: center; font-size: 16px;">GENDER</th><th style="text-align: center; font-size: 16px;">LEVEL</th><th style="text-align: center; font-size: 16px;">COURSE</th><th style="text-align: center; font-size: 16px;">ACTIONS</th>
            </thead>
            <?php while ($don = mysqli_fetch_assoc($resu)){?>
            <tr>
                <td><?php echo($don['MATRICULE'])?></td>
                <td><?php echo($don['NOM'])?></td>
                <td><?php echo($don['PRENOMS'])?></td>
                <td><?php echo($don['DATE_NAISS'])?></td>
                <td><?php echo($don['MAIL'])?></td>
                <td><?php echo($don['NUMERO_TEL'])?></td>
                <td><?php echo($don['GENRE'])?></td>
                <td><?php echo($don['NIVEAU'])?></td>
                <td><?php echo($don['FILIERE'])?></td>
                <td>
                    <a style="width: 180px;" class="button" href="supprimer.php?supet=<?php echo $don['MATRICULE']; ?>">DELETE</a>
                    <a style="width: 180px;" class="button" href="modifier.php?mod=<?php echo $don['MATRICULE']; ?>">EDIT</a>
                </td>
                <?php }?>
            </tr>
        </table>
    </section>

    <!-- Contact -->
    <section id="contact">
        <div class="inner">

            <section class="split">
                <section>
                    <div class="contact-method">
                        <span class="icon solid alt fa-envelope"></span>
                        <h3>Mail</h3>
                        <a href="mailto:infos@groupeloko.com">infos@groupeloko.com</a>
                    </div>
                </section>
                <section>
                    <div class="contact-method">
                        <span class="icon solid alt fa-phone"></span>
                        <h3>Phone</h3>
                        <span>+225 27 21 75 29 90 / +225 27 21 75 29 88</span>
                    </div>
                </section>
                <section>
                    <div class="contact-method">
                        <span class="icon solid alt fa-home"></span>
                        <h3>Address</h3>
                        <span>Koumassi ZONE 4<br />
										Rue du 7 Decembre, Abidjan<br />
										Côte d'Ivoire</span>
                    </div>
                </section>
            </section>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
           <!-- <ul class="icons">
                <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
            </ul>-->
            <ul class="copyright">
                <li>&copy; Université LOKO</li><li>Design: GROUPE 7</li>
            </ul>
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