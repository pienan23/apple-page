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
$log1=@$_POST['login'];
$log2=@$_POST['nlogin'];
$pass1=@$_POST['password'];
$pass2=@$_POST['npassword'];
$cpass=@$_POST['cpassword'];
if(isset($_POST['bval'])){
$mrq=mysqli_query($conn,"select * from secret");
while($rsu=mysqli_fetch_assoc($mrq)){
   
  if($log1==$rsu['login'] && $pass1==$rsu['password']){
  mysqli_query($conn,"update secret set login='$log2',password='$pass2' where login='$log1' and password='$pass1'");
  $mess='<b class="succes">Changement réussie !</b>';
  }
  else
   $mess="<b class='erreur'>Autorisation refusée !!</b>";
}
/*Application réalisée du 26 au 31 Juillet 2020 à N'Djaména au Tchad par
   TARGOTO CHRISTIAN
   Contact: 23560316682 / ct@chrislink.net */
}

?>
<?php  
//changer login et password
/*
$log1=@$_POST['login'];
$log2=@$_POST['nlogin'];
$pass1=@$_POST['password'];
$pass2=@$_POST['npassword'];
if(isset($_POST['bval'])){
$rq=mysqli_query($conn,"update secret set login='$log2',password='$pass2' where login='$log1' and password='$pass1'");
if($rq){
$mess='<b class="succes">Changement réussie !</b>';
}
else
$mess="<b class='erreur'>Impossible de changer !</b>";
}
*/
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
<hr>
	<div align="center">
	<h2 >CHANGEMENT DE MOT DE PASSE</h2>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" >
  <table align="">
   <tr><td></td><td><?php print $mess;?></td></tr>
   <tr><td></td><td><strong >ANCIEN NOM D'UTILISATEUR :</strong></td></tr>
   <tr><td></td><td><input type="text" name="login" class="champ" size="25"  ></td></tr>
   <tr><td></td><td><strong >ANCIEN MOT DE PASSE :</strong></td></tr>
   <tr><td></td><td><input type="password" name="password" class="champ" size="25"  ></td></tr>
   <tr><td></td><td><strong >NOUVEAU NOM D'UTILISATEUR :</strong></td></tr>
   <tr><td></td><td><input type="password" name="nlogin" class="champ" size="25"  ></td></tr>
   <tr><td></td><td><strong >NOUVEAU MOT DE PASSE :</strong></td></tr>
   <tr><td></td><td><input type="text" name="npassword" class="champ" size="25"  ></td></tr>
   
   <tr><td></td><td><input type="submit" name="bval" value="Valider" class="bouton" ></td></tr>
  </table>
  </form>
	</div>
	<hr >
</body>
</html>