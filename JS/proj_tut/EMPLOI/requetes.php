<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emploidutemps_db";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
} 
/*Code écrit du 28 au 29 mars 2021 à N'djaména au Tchad par
   TARGOTO CHRISTIAN
   Contact: ct@chrislink.net / 23560316682
 */
?>
<?php 
$matricule=@$_POST["matricule"];
$matiere=@$_POST["matiere"];
$heure=@$_POST["heure"];
$jour=@$_POST["jour"];
$classe=@$_POST["classe"];
$classe2=@$_POST["classe2"];
$id=@$_POST["id"];
$mess='';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Emploi du temps - UTT LOKO</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
	<meta charset="utf8">
</head>

<body class="is-preload">
<div id="wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <a href="../index.html" class="logo"><img src="assets/css/lokoo.png" alt=""> <span></span></a>
        <!--<div class="langue" style="font-size: 12px; margin-top: 15px; margin-left: 800px;">
            <a href="inscription.php" class="button" style="height: 30px;"><p>Français</p></a>
            <a href="en/index.html" class="button" style="height: 30px;"><p>English</p></a>
        </div>-->
        <nav>
            <a href="#menu">Menu</a>
        </nav>

    </header>

    <!-- Menu -->
    <nav id="menu">
        <ul class="links">
            <li><a href="../index.html">Accueil</a></li>
            <li><a href="../generic.php">Inscription</a></li>
            <li><a href="../galerie_FR/galerie.html">Galerie</a></li>
            <li><a href="../filiere.html">Filières</a></li>
            <li><a href="../EMPLOI/admin.php">Emploi du temps</a></li>
            <li><a href="../notes/index.php">Gestion des notes</a></li>
            <li><a href="index.php">Campus</a></li>
            <li><a href="../form.php">Contactez-nous</a></li>
            <li><a href="../landing.html">A propos</a></li>
        </ul>
        <!-- <ul class="actions stacked">
            <li><a href="#" class="button primary fit">Get Started</a></li>
            <li><a href="#" class="button fit">Log In</a></li>
        </ul> -->
    </nav>
	<div align="center">
	<br>

        <a class="button" href="admin.php">ENREGISTREMENT DES ENSEIGNANTS</a><br><br>
	<a class="button" href="admin.php">ENREGISTREMENT DES SEANCES DE COURS</a>
	<h2>Les séances de cours de la semaine par matière et par classe</h2>
	<form action="" method="POST" >
	<table>
	<tr><td><b>Classe </b></td><td><select name="classe" id="classe" >
     <option  value="<?php echo $classe; ?>"><?php echo $classe; ?></option>
                <option  value="LIC1-ITER">LICENCE 1</option>
                <option  value="LIC2-ITER1">LICENCE 2 - ITER G1</option>
                <option  value="LIC2-ITER2">LICENCE 2 - ITER G2</option>
                <option  value="LIC3-ITER">LICENCE 3</option>
                <option  value="MAS1-ITER">MASTER 1</option>
                <option  value="MAS2-ITER">MASTER 2</option>
     </select></td></tr>
     <tr><td><b>Matière </b></td><td><input type="text" name="matiere" value="<?php print $matiere;?>"></td></tr>
     <tr><td></td><td><input type="submit" name="baff" value="AFFICHER" class="bouton"></td></tr>
	</table>
	</form>
	<h2>Emploi du temps de la semaine par classe</h2>
	<form action="" method="POST" >
	<table>
	<tr><td><b>Classe </b></td><td><select name="classe2" id="classe2" >
     <option  value="<?php echo $classe2; ?>"><?php echo $classe2; ?></option>
                <option  value="LIC1-ITER">LICENCE 1</option>
                <option  value="LIC2-ITER1">LICENCE 2 - ITER G1</option>
                <option  value="LIC2-ITER2">LICENCE 2 - ITER G2</option>
                <option  value="LIC3-ITER">LICENCE 3</option>
                <option  value="MAS1-ITER">MASTER 1</option>
                <option  value="MAS2-ITER">MASTER 2</option>
     </select></td></tr>
     <tr><td></td><td><input type="submit" name="baff2" value="AFFICHER" class="bouton"></td></tr>
	</table>
	</form>
	

	<?php 
	print"<br><br>";
	//afficher les séances de cours de la semaine par matiere et par classe
	if(isset($_POST['baff'])&&!empty($classe)&&!empty($matiere)){
	$rq2=mysqli_query($conn,"select * from enseignant_cours where classe='$classe' and matiere='$matiere' order by num_jour ");
	print'<table border="1" class="tab" ><tr><th>ID</th><th>Classe</th><th>Matiere</th><th>Jour</th><th>Heure</th><th>Nom enseignant</th><th>Contact enseignant</th></tr>';
	while($rst2=mysqli_fetch_assoc($rq2)){
	print"<tr>";
	  echo"<td>".$rst2['id']."</td>";
	         echo"<td>".$rst2['classe']."</td>";
	          echo"<td>".$rst2['matiere']."</td>";
	          echo"<td>".$rst2['jour']."</td>";
	           echo"<td>".$rst2['heure']."</td>";
	           echo"<td>".$rst2['nom']."</td>";
	           echo"<td>".$rst2['contact']."</td>";
	         print"</tr>";
	}
	print'</table>';
	
	}
	
	?>
	<?php 
	print"<br><br>";
	//afficher les emplois du temps de la semaine par classe
	if(isset($_POST['baff2'])&&!empty($classe2)){
	$rq2=mysqli_query($conn,"select * from enseignant_cours where classe='$classe2' order by num_jour,heure");
	print'<table border="1" class="tab" ><tr><th>ID</th><th>Classe</th><th>Matiere</th><th>Jour</th><th>Heure</th><th>Nom enseignant</th><th>Contact enseignant</th></tr>';
	while($rst2=mysqli_fetch_assoc($rq2)){
	print"<tr>";
	  echo"<td>".$rst2['id']."</td>";
	         echo"<td>".$rst2['classe']."</td>";
	          echo"<td>".$rst2['matiere']."</td>";
	          echo"<td>".$rst2['jour']."</td>";
	           echo"<td>".$rst2['heure']."</td>";
	           echo"<td>".$rst2['nom']."</td>";
	           echo"<td>".$rst2['contact']."</td>";
	         print"</tr>";
	}
	print'</table>';
	
	}
	
	?>
	</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>