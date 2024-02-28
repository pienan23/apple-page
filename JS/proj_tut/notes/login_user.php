<?php 
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
?>

<?php
 if(isset($_GET['action'])){
   $action=$_GET['action'];
   if($action=="deconn"){
   unset($_SESSION['id']);
    unset($_SESSION['log']);
   
   }
 }
 ?>
 <?php
 //authentification
 //login=chcode
 //password=chrislink
$mess="";
if(isset($_POST['bouton'])){
$lg=@$_POST['logger'];
$lg=htmlspecialchars($lg);
$ps=@$_POST['passer'];
$ps=htmlspecialchars($ps);
//$log_crypt = md5($login);
	//$pass_crypt = md5($ps);
$rq="select * from secret where login='$lg'";
$exe=mysqli_query($conn,$rq);
$result=mysqli_fetch_assoc($exe);
if($result){
  if($result['password']==$ps){
  $_SESSION['id']=$result['id'];
   $_SESSION['login']=$lg;
   header('Location:note_enrg.php');
   exit();
  }
  else
  $mess="<br><b class='erreur'>Mot de passe incorrect!!</b>";
}
else
 $mess="<br><b class='erreur'>Nom d'utilisateur introuvable!! </b>";

}

?>
<!-- Created by TopStyle Trial - www.topstyle4.com -->
<!DOCTYPE html>
<html>
<head>
	<title>Gestion des notes - UTT LOKO</title>
	<meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/site.webmanifest">
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
	<hr>
        <a class="button" href="index.php">NOTES</a><br><br>
	<a class="button" href="password_change.php">CHANGER LE MOT DE PASSE</a>
	<h2 >Connexion à la page de publication de notes</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" >
  <table align="">
  
     <tr ><td></td><td> <?php print $mess;?></td></tr>
    <tr><td></td><td><strong >Nom d'utilisateur</strong></td></tr>
   <tr><td></td><td><input type="text" name="logger" class="champ" size="25"  ></td></tr>
   <tr><td></td><td><strong>Mot de passe</strong></td></tr>
   <tr><td></td><td><input type="password" name="passer" class="champ" size="25"></td></tr>
   <tr><td></td><td><input type="submit" name="bouton" value="Connexion" class="bouton" ></td></tr>
  
  </table>
  </form>
	<hr>
	
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
<?php 
  /*Application réalisée du 26 au 31 Juillet 2020 à N'Djaména au Tchad par
   TARGOTO CHRISTIAN
   Contact: 23560316682 / ct@chrislink.net */
?>