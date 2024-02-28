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
<?php 
//suppréssion séance cours
if(isset($_POST['bsupp'])&&!empty($id)){
 $sql=mysqli_query($conn,"delete from tb_cours where id='$id'");
if($sql){
 $mess="<b>Success</b>";
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
	<meta charset="utf8">
</head>

<body>
	<div align="center">
	<br>
        <a href="index.php">TEACHER REGISTRATION</a><br><br>
        <a href="cours.php">RECORDING OF COURSE SESSIONS</a>
        <h2>The weekly class sessions by subject and by class</h2>
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
     <tr><td><b>Course </b></td><td><input type="text" name="matiere" value="<?php print $matiere;?>"></td></tr>
     <tr><td></td><td><input type="submit" name="baff" value="SHOW" class="bouton"></td></tr>
	</table>
	</form>
	<h2>Weekly Timetable by class</h2>
	<form action="" method="POST" >
	<table>
        <tr><td><b>Class </b></td><td><select name="classe2" id="classe2" >
                    <option  value="<?php echo $classe2; ?>"><?php echo $classe2; ?></option>
                    <option  value="LIC1-ITER">LICENCE 1</option>
                    <option  value="LIC2-ITER1">LICENCE 2 - ITER G1</option>
                    <option  value="LIC2-ITER2">LICENCE 2 - ITER G2</option>
                    <option  value="LIC3-ITER">LICENCE 3</option>
                    <option  value="MAS1-ITER">MASTER 1</option>
                    <option  value="MAS2-ITER">MASTER 2</option>
                </select></td></tr>
     <tr><td></td><td><input type="submit" name="baff2" value="SHOW" class="bouton"></td></tr>
	</table>
	</form>
	
	<h2>Delete a course</h2>
	<form action="" method="POST" >
	<table>
	<tr><td><b>ID </b></td><td><input type="text" name="id" value="<?php print $id;?>"></td></tr>
     <tr><td></td><td><input type="submit" name="bsupp" value="DELETE" class="bouton"></td></tr>
	<tr><td></td><td><?php print $mess;?></td></tr>
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
</body>
</html>