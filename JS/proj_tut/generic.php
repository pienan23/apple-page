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
                <header id="header" class="alt">
                    <a href="index.html" class="logo"><img src="assets/css/lokoo.png" alt=""> <span></span></a>
                    <div class="langue" style="font-size: 12px; margin-top: 15px; margin-left: 800px;">
                        <a href="generic.php" class="button" style="height: 30px;"><p>Français</p></a>
                        <a href="en/generic.php" class="button" style="height: 30px;"><p>English</p></a>
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
                        <li><a href="EMPLOI/admin.php">Emploi du temps</a></li>
                        <li><a href="notes/index.php">Gestion des notes</a></li>
                        <li><a href="foum/index.php">Campus</a></li>
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
					<h5 style="float:right; font-size:20px; text-decoration:underline dashed; margin-top:15px;";> <a href="admin.php">Liste des inscrits</a></h5>
						<h1 style="text-align:center;">INSCRIPTIONS</h1>
						<form method="POST" action="generic.php">
							<div class="fields">

								<div class="field half">
									<label for="NOM">Nom</label>
									<input type="text" name="NOM" id="name" />
								</div>
								<div class="field half">
									<label for="PRENOMS">Prénoms</label>
									<input type="text" name="PRENOMS" id="prename" />
								</div>
								<div class="field half">
									<label for="DATE_NAISS">Date de naissance</label>
									<input style="background-color:	-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		background: rgba(212, 212, 255, 0.035);
		border: none;
		border-radius: 0;
		color: inherit;
		display: block;
		line-height: 48px;
		outline: 0;
		padding: 0 1em;
		text-decoration: none;
		width: 100%;" type="date" name="DATE_NAISS" id="date"/>
								</div>
								<div class="field half">
									<label for="MAIL">Adresse mail</label>
									<input type="text" name="MAIL" id="email" />
								</div>
								<div class="field half">
									<label for="NUMERO_TEL">Numéro de téléphone</label>
									<input type="text" name="NUMERO_TEL" id="tel" />
								</div>
								<div class="field half">
									<label for="GENRE">Genre</label>
									<select style="background-color: -moz-appearance: none;-webkit-appearance: none;-ms-appearance: none;appearance: none;background: rgba(212, 212, 255, 0.035);border: none;border-radius: 0;color: inherit;display: block;line-height: 48px;outline: 0;padding: 0 1em;text-decoration: none;width: 100%;" type="select" name="GENRE" id="genre" >
										<option selected  value="">--</option>		
										<option value="Masculin">MASCULIN</option>	
										<option value="Feminin">FEMININ</option>	
									<select/>
								</div>
								<div class="field half">
									<label for="NIVEAU">Niveau</label>
									<select style="background-color: -moz-appearance: none;-webkit-appearance: none;-ms-appearance: none;appearance: none;background: rgba(212, 212, 255, 0.035);border: none;border-radius: 0;color: inherit;display: block;line-height: 48px;outline: 0;padding: 0 1em;text-decoration: none;width: 100%;" type="select" name="NIVEAU" id="niveau" >
										<option selected  value="">--</option>		
										<option value="LICENCE 1">LICENCE 1</option>	
										<option value="LICENCE 2">LICENCE 2</option>	
										<option value="LICENCE 3">LICENCE 3</option>	
										<option value="MASTER 1">MASTER 1</option>	
										<option value="MASTER 2">MASTER 2</option>	
									<select/>
								</div>
								<div class="field half">
									<label for="FILIERE">Filière</label>
									<select style="background-color: -moz-appearance: none;-webkit-appearance: none;-ms-appearance: none;appearance: none;background: rgba(212, 212, 255, 0.035);border: none;border-radius: 0;color: inherit;display: block;line-height: 48px;outline: 0;padding: 0 1em;text-decoration: none;width: 100%;" type="select" name="FILIERE" id="filiere" >
										<option selected  value="">--</option>		
										<option value="ITER">INFORMATIQUE & TELECOMS</option>	
										<option value="GMPE">GEOLOGIE, MINE, PETROLE & ENVIRONNEMENT</option>	
										<option value="IAA">INDUSTRIE AGRO-ALIMENTAIRE</option>	
										<option value="GCV">GENIE CIVIL</option>	
										<option value="SEG">SCIENCES ECONOMIQUES ET DE GESTION</option>
										<option value="IC-RH">RESSOURCES HUMAINES & COMMUNICATION</option>		
									<select/>
								</div>
								<!-- <div class="field">
									<label for="message">Message</label>
									<textarea name="message" id="message" rows="6"></textarea>
								</div> -->
							</div>
							<ul class="actions">
								<li><input type="submit" value="Valider" class="primary" name="benrg";/></li>
								<li><input type="reset" value="Effacer" /></li>
							</ul>
                            <?php
                                if(isset($_POST['benrg']))
                                {
                                    $nom = $_POST['NOM'];
                                    $prenom = $_POST['PRENOMS'];
                                    $date = $_POST['DATE_NAISS'];
                                    $mail = $_POST['MAIL'];
                                    $tel = $_POST['NUMERO_TEL'];
                                    $genre = $_POST['GENRE'];
                                    $niveau = $_POST['NIVEAU'];
                                    $filiere = $_POST['FILIERE'];

                                    $req = "INSERT INTO etudiants (NOM,PRENOMS,DATE_NAISS,MAIL,NUMERO_TEL,GENRE,NIVEAU,FILIERE) VALUES ('$nom', '$prenom', '$date', '$mail', '$tel', '$genre', '$niveau', '$filiere')";
                                    $res = mysqli_query($rrr,$req);

                                    if($res)
                                    {
                                        echo "Inscription réussie !";
                                    }
                                    else
                                    {
                                        echo "Echec de l'inscription";
                                    }

                                }
                            ?>
						</form>
					</section>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-envelope"></span>
										<h3>Adresse Mail</h3>
										<a href="mailto:infos@groupeloko.com">infos@groupeloko.com</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-phone"></span>
										<h3>Téléphone</h3>
										<span>+225 27 21 75 29 90 / +225 27 21 75 29 88</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-home"></span>
										<h3>Addresse</h3>
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
							<!--<ul class="icons">
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
        <!--Start of Tawk.to Script
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/62b0c3707b967b117995864b/1g617msl4';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
            })();
        </script>-->
        <!--End of Tawk.to Script-->
	</body>
</html>