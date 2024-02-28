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
/*Code �crit du 28 au 29 mars 2021 � N'djam�na au Tchad par
   TARGOTO CHRISTIAN
   Contact: ct@chrislink.net / 23560316682
 */
?>
<?php 
$matricule=@$_POST["matricule"];
$nom=@$_POST["nom"];
$contact=@$_POST["contact"];
$mess='';
?>
<?php 
//enregistrement enseignant
if(isset($_POST['benrg'])&&!empty($matricule)&&!empty($nom)&&!empty($contact)){
$sql=mysqli_query($conn,"insert into tb_enseignant(matricule,nom,contact) values('$matricule','$nom','$contact')");
 
if($sql){
 $mess="<b>Enregistrement éffectué avec succès !</b>";
}
else{
 $mess="<b>Erreur !</b>";
}

}

?>
<?php 
//modification enseignant
if(isset($_POST['bmodif'])&&!empty($matricule)&&!empty($nom)&&!empty($contact)){
 $sql=mysqli_query($conn,"update tb_enseignant set nom='$nom',contact='$contact' where matricule='$matricule'");
if($sql){
 $mess="<b>Modification effectuée avec succès !</b>";
}
else{
 $mess="<b>Erreur !</b>";
}

}

?>
<?php 
//suppr�ssion enseignant
if(isset($_POST['bsupp'])&&!empty($matricule)){
 $sql=mysqli_query($conn,"delete from tb_enseignant where matricule='$matricule'");
if($sql){
 $mess="<b>Suppression effectuée avec succès !</b>";
}
else{
 $mess="<b>Erreur !</b>";
}

}

?>
<!-- Created by TopStyle Trial - www.topstyle4.com -->
<!DOCTYPE html>
<html>
<head>
	<title>Emploi du temps - UTT LOKO</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
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
        <a CLASS="button" href="cours.php">ENREGISTREMENT DES SEANCES DE COURS</a><br><br>
	<a class="button" href="requetes.php">REQUETES</a>
	<h2>Formulaire d'enregistrement des enseignants</h2>
	<form action="" method="POST">
	<fieldset >
	<legend >Enseignant</legend>
	<table>
	<tr><td><b>Matricule </b></td><td><input type="text" name="matricule" value=""></td></tr>
	<tr><td><b>Nom </b></td><td><input type="text" name="nom" value=""></td></tr>
	<tr><td><b>Contact </b></td><td><input type="text" name="contact" value=""></td></tr>
	<tr><td></td><td><input type="submit" name="benrg" value="ENREGISTRER" class="bouton"></td></tr>
   <tr><td></td><td><input type="submit" name="bmodif" value="MODIFIER" class="bouton"></td></tr>
	<tr><td></td><td><input type="submit" name="bsupp" value="SUPPRIMER" class="bouton"></td></tr>
	<tr><td></td><td><?php print $mess;?></td><td></td></tr>
	</table>
	</fieldset>
	</form>
	
	<?php 
	print"<br><br>";
	//affichage liste enseignants
	$rq1=mysqli_query($conn,"select * from tb_enseignant ");
	print'<table border="1" class="tab"><tr><th>Matricule</th><th>Nom</th><th>Contact</th></tr>';
	while($rst=mysqli_fetch_assoc($rq1)){
	  print"<tr>";
	         echo"<td>".$rst['matricule']."</td>";
	          echo"<td>".$rst['nom']."</td>";
	           echo"<td>".$rst['contact']."</td>";
	        
	         print"</tr>";
	}
		print'</table>';
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