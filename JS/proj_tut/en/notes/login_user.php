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
	<title>Test management</title>
	<meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
</head>

<body>
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
</body>
</html>
<?php 
  /*Application réalisée du 26 au 31 Juillet 2020 à N'Djaména au Tchad par
   TARGOTO CHRISTIAN
   Contact: 23560316682 / ct@chrislink.net */
?>