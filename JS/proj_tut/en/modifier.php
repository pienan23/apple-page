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
                <header id="header" class="alt">
                    <a href="index.html" class="logo"><img src="assets/css/lokoo.png" alt=""> <span></span></a>
                    <div class="langue" style="font-size: 12px; margin-top: 15px; margin-left: 800px;">
                        <a href="../modifier.php" class="button" style="height: 30px;"><p>Français</p></a>
                        <a href="modifier.php" class="button" style="height: 30px;"><p>English</p></a>
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
					<section style="margin-left: 55px; margin-right:55px;">
						<h1 style="text-align:center;">Edit the informations</h1>
						<form name="formupdate" method="POST" action="">
							<div class="fields">
                                <div class="field half">
                                    <label for="MATRICULE">Registration Number</label>
                                    <input type="text" name="MATRICULE" id="MATRICULE" value="<?php echo $_GET['mod']; ?>" readonly>
                                </div>
								<div class="field half">
									<label for="NOM">Last Name</label>
									<input type="text" name="NOM" id="name" />
								</div>
								<div class="field half">
									<label for="PRENOMS">First Name</label>
									<input type="text" name="PRENOMS" id="prename" />
								</div>
								<div class="field half">
									<label for="DATE_NAISS">Birth Date</label>
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
									<label for="MAIL">Mail adress</label>
									<input type="text" name="MAIL" id="email" />
								</div>
								<div class="field half">
									<label for="NUMERO_TEL">Number Phone</label>
									<input type="text" name="NUMERO_TEL" id="tel" />
								</div>
								<div class="field half">
									<label for="GENRE">Gender</label>
									<select style="background-color: -moz-appearance: none;-webkit-appearance: none;-ms-appearance: none;appearance: none;background: rgba(212, 212, 255, 0.035);border: none;border-radius: 0;color: inherit;display: block;line-height: 48px;outline: 0;padding: 0 1em;text-decoration: none;width: 100%;" type="select" name="GENRE" id="genre" >
										<option selected  value="">--</option>		
										<option value="Masculin">MALE</option>
										<option value="Feminin">FEMININE</option>
									<select/>
								</div>
								<div class="field half">
									<label for="NIVEAU">Level</label>
									<select style="background-color: -moz-appearance: none;-webkit-appearance: none;-ms-appearance: none;appearance: none;background: rgba(212, 212, 255, 0.035);border: none;border-radius: 0;color: inherit;display: block;line-height: 48px;outline: 0;padding: 0 1em;text-decoration: none;width: 100%;" type="select" name="NIVEAU" id="niveau" >
										<option selected value="">--</option>		
										<option value="LICENCE 1">LICENCE 1</option>	
										<option value="LICENCE 2">LICENCE 2</option>	
										<option value="LICENCE 3">LICENCE 3</option>	
										<option value="MASTER 1">MASTER 1</option>	
										<option value="MASTER 2">MASTER 2</option>	
									<select/>
								</div>
								<div class="field half">
									<label for="FILIERE">Course</label>
									<select style="background-color: -moz-appearance: none;-webkit-appearance: none;-ms-appearance: none;appearance: none;background: rgba(212, 212, 255, 0.035);border: none;border-radius: 0;color: inherit;display: block;line-height: 48px;outline: 0;padding: 0 1em;text-decoration: none;width: 100%;" type="select" name="FILIERE" id="filiere" >
                                        <option selected value="">--</option>
                                        <option value="ITER">IT & TELECOMS</option>
                                        <option value="GMPE">GEOLOGY, MINE, OIL</option>
                                        <option value="IAA">AGRI-FOOD INDUSTRY</option>
                                        <option value="GCV">CIVIL ENGINEERING</option>
                                        <option value="SEG">ECONOMIC AND MANAGEMENT SCIENCES</option>
                                        <option value="IC-RH">HUMAN RESOURCES & COMMUNICATION</option>
									<select/>
								</div>
								<!-- <div class="field">
									<label for="message">Message</label>
									<textarea name="message" id="message" rows="6"></textarea>
								</div> -->
							</div>
                            <ul class="actions">
                                <li><input type="submit" value="Edit" class="primary" name="btmod";/></li>
                                <li><input type="reset" value="Reset" /></li>
                            </ul>
                            <?php
                                if(isset($_POST['btmod']))
                                {
                                    $matricule = $_POST['MATRICULE'];
                                    $nom = $_POST['NOM'];
                                    $prenom = $_POST['PRENOMS'];
                                    $date = $_POST['DATE_NAISS'];
                                    $mail = $_POST['MAIL'];
                                    $tel = $_POST['NUMERO_TEL'];
                                    $genre = $_POST['GENRE'];
                                    $niveau = $_POST['NIVEAU'];
                                    $filiere = $_POST['FILIERE'];

                                   $modifier = $_GET['mod'];
                            
                                   $reqm = "UPDATE etudiants SET NOM='$nom', PRENOMS='$prenom', DATE_NAISS='$date', MAIL='$mail', NUMERO_TEL='$tel', GENRE='$genre', NIVEAU='$niveau', FILIERE='$filiere' WHERE MATRICULE='$modifier'";

                                    $reqq = mysqli_query($conn, $reqm);
                                    
                                    if($reqq)
                                    {
                                        header("location:generic.php");
                                    }
                                    else
                                    {
                                        echo "Modifications failed!";
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

	</body>
</html>