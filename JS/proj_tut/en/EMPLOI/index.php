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
 $mess="<b> Success !</b>";
}
else{
 $mess="<b>Error !</b>";
}

}

?>
<?php 
//modification enseignant
if(isset($_POST['bmodif'])&&!empty($matricule)&&!empty($nom)&&!empty($contact)){
 $sql=mysqli_query($conn,"update tb_enseignant set nom='$nom',contact='$contact' where matricule='$matricule'");
if($sql){
 $mess="<b>Success !</b>";
}
else{
 $mess="<b>Error !</b>";
}

}

?>
<?php 
//suppr�ssion enseignant
if(isset($_POST['bsupp'])&&!empty($matricule)){
 $sql=mysqli_query($conn,"delete from tb_enseignant where matricule='$matricule'");
if($sql){
 $mess="<b>Success !</b>";
}
else{
 $mess="<b>Error !</b>";
}

}

?>
<!-- Created by TopStyle Trial - www.topstyle4.com -->
<!DOCTYPE html>
<html>
<head>
	<title>Timetable - UTT LOKO</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
</head>

<body>
	<div align="center">
	<br>
        <a href="cours.php">RECORDING OF COURSE SESSIONS</a><br><br>
        <a href="requetes.php.php">QUERIES</a>
        <h2>Teacher registration form</h2>
	<form action="" method="POST">
	<fieldset >
	<legend >Teacher</legend>
	<table>
	<tr><td><b>ID </b></td><td><input type="text" name="matricule" value=""></td></tr>
	<tr><td><b>Name </b></td><td><input type="text" name="nom" value=""></td></tr>
	<tr><td><b>Contact </b></td><td><input type="text" name="contact" value=""></td></tr>
	<tr><td></td><td><input type="submit" name="benrg" value="SAVE" class="bouton"></td></tr>
   <tr><td></td><td><input type="submit" name="bmodif" value="MODIFY" class="bouton"></td></tr>
	<tr><td></td><td><input type="submit" name="bsupp" value="DELETE" class="bouton"></td></tr>
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
	
</body>
</html>