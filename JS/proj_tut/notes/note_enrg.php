<?php 
/*include_once('conn.php');*/
session_start(); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notedb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
} 
$mess='';
$mess2='';
$mess3='';
?>
<?php
//Si l'utilisateur n'est pas connecté, on le ramène à la page index
if (!isset($_SESSION['id'])) {
	header('Location: login_user.php?action=redirect');
	exit();
}
?>
<?php  
//insertion des notes de controle
$matricule=@$_POST['matricule'];
$matiere=@$_POST['matiere'];
$controle=@$_POST['controle'];
if(isset($_POST['bcontrole'])&&!empty($matricule)){
$rq=mysqli_query($conn,"insert into note(matricule,matiere,controle) values('$matricule','$matiere','$controle')");
if($rq){
$mess='<b class="succes">Insertion réussie !</b>';
}
else
$mess="<b class='erreur'>Impossible d'insérer !</b>";
}

?>

<?php  
//insertion des notes d'examen
$examen=@$_POST['examen'];
if(isset($_POST['bexamen'])&&!empty($matricule)){
$rq=mysqli_query($conn,"update note set examen='$examen' where matricule='$matricule' and matiere='$matiere'");
if($rq){
$mess='<b class="succes">Insertion réussie !</b>';
}
else
$mess="<b class='erreur'>Impossible d'insérer !</b>";
}

?>

<?php  
//insertion des notes de tp
$tp=@$_POST['tp'];
if(isset($_POST['btp'])&&!empty($matricule)){
$rq=mysqli_query($conn,"update note set tp='$tp' where matricule='$matricule' and matiere='$matiere'");
if($rq){
$mess='<b class="succes">Insertion réussie !</b>';
}
else
$mess="<b class='erreur'>Impossible d'insérer !</b>";
}

?>

<?php 
//supprimer notes
if(isset($_POST['bsupp'])&&!empty($matricule)){
$rq=mysqli_query($conn,"delete from note  where matricule='$matricule' and matiere='$matiere'");
if($rq){
$mess='<b class="succes">Suppréssion réussie !</b>';
}
else
$mess="<b class='erreur'>Impossible de supprimer !</b>";
}
?>
<!-- Created by TopStyle Trial - www.topstyle4.com -->
<!DOCTYPE html>
<html>
<head>
<title>Gestion des notes - UTT LOKO</title>
	<meta charset="utf8">
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
            <li><a href="index.php">Gestion des notes</a></li>
            <li><a href="../foum/index.php">Campus</a></li>
            <li><a href="../form.php">Contactez-nous</a></li>
            <li><a href="../landing.html">A propos</a></li>
        </ul>
        <!-- <ul class="actions stacked">
            <li><a href="#" class="button primary fit">Get Started</a></li>
            <li><a href="#" class="button fit">Log In</a></li>
        </ul> -->
    </nav>
	<div align="center">
        <a class="button" href="../index.html">Accueil</a>
        <a class="button" href="index.php?action=deconn">DECONNEXION</a>
	   <h2>ENREGISTREMENT DES NOTES :</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" >
  <table align="">
  
     <tr ><td></td><td> <?php print $mess;?></td></tr>
    <tr><td></td><td><strong >Matricule :</strong></td></tr>
   <tr><td></td><td><input type="text" name="matricule" class="champ" size="25"  ></td></tr>
   <tr><td></td><td><strong>Matière :</strong></td></tr>
   <tr><td></td><td><select name="matiere" id="matiere"  >
               <option  value="POO">Programmation orientée objet</option>
               <option  value="BDD2">Integration des SGBD dans les env. de prog.</option>
               <option  value="BDD1">SGBD</option>
               <option  value="RESEAUX1">Réseaux Locaux</option>
               <option  value="PROGEVE">Programmation événementielle</option>
               <option  value="ADMINSE">Adminstration des systèmes d'exploitation</option>
     </select></td></tr>
   <tr><td></td><td><strong>Controle :</strong></td></tr>
   <tr><td></td><td><input type="text" name="controle" class="champ" size="25"></td></tr>
   <tr><td></td><td><strong>Examen :</strong></td></tr>
   <tr><td></td><td><input type="text" name="examen" class="champ" size="25"></td></tr>
   <tr><td></td><td><strong>TP :</strong></td></tr>
   <tr><td></td><td><input type="text" name="tp" class="champ" size="25"></td></tr>
      <tr><td></td><td><input type="submit" name="bcontrole" value="Enregistrer note controle" class="bouton" ></td></tr>
       <tr><td></td><td><input type="submit" name="bexamen" value="Enregistrer note examen " class="bouton" ></td></tr>
   <tr><td></td><td><input type="submit" name="btp" value="Enregistrer note tp " class="bouton" ></td></tr>
   <tr><td></td><td><input type="submit" name="bsupp" value="Suppréssion" class="bouton" ></td></tr>
  </table>
  </form>
  <h2>Recherche de notes par matière :</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" >
  <table align="">
   <tr><td></td><td><strong>Matière :</strong></td></tr>
   <tr><td></td><td><select name="matiere" id="matiere"  >
               <option  value="POO">Programmation orientée objet</option>
               <option  value="BDD2">Integration des SGBD dans les env. de prog.</option>
               <option  value="BDD1">SGBD</option>
               <option  value="RESEAUX1">Réseaux Locaux</option>
               <option  value="PROGEVE">Programmation événementielle</option>
               <option  value="ADMINSE">Adminstration des systèmes d'exploitation</option>
     </select></td></tr>
   <tr><td></td><td><input type="submit" name="brech" value="Chercher" class="bouton" ></td></tr>
  </table>
  </form>
  <br>
  <?php 
  //liste des notes
  if(isset($_POST['brech'])){
  $sql=mysqli_query($conn,"select * from note where matiere='$matiere'");
  print'<table border="1" class="tab"><tr><th>Matricule</th><th>Matiere</th><th>Controle</th><th>Examen</th><th>TP</th></tr>';
  while($rst2=mysqli_fetch_assoc($sql)){
	 print"<tr>";
	         echo"<td>".$rst2['matricule']."</td>";
	         echo"<td>".$rst2['matiere']."</td>";
	         echo"<td>".$rst2['controle']."</td>";
	         echo"<td>".$rst2['examen']."</td>";
	         echo"<td>".$rst2['tp']."</td>";
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