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
$matricule=@$_POST["matricule"];
$matiere=@$_POST["matiere"];
$heure=@$_POST["heure"];
$jour=@$_POST["jour"];
$classe=@$_POST["classe"];
$mess='';
?>
<?php 
//enregistrement séance cours
if(isset($_POST['benrg'])&&!empty($matricule)&&!empty($matiere)
&&!empty($heure)&&!empty($jour)&&!empty($classe)){
 $sql=mysqli_query($conn,"insert into tb_cours (classe,matiere,Jour,heure,matricule_ens) values('$classe','$matiere','$jour','$heure','$matricule')");
if($sql){
 $mess="<b>Enregistrement éffectué avec succès !</b>";
 mysqli_query($conn,"update tb_cours set num_jour=1 where Jour='LUNDI'");
 mysqli_query($conn,"update tb_cours set num_jour=2 where Jour='MARDI'");
 mysqli_query($conn,"update tb_cours set num_jour=3 where Jour='MERCREDI'");
 mysqli_query($conn,"update tb_cours set num_jour=4 where Jour='JEUDI'");
 mysqli_query($conn,"update tb_cours set num_jour=5 where Jour='VENDREDI'");
 mysqli_query($conn,"update tb_cours set num_jour=6 where Jour='SAMEDI'");
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
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
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
    <a class="button" href="index.php">ENREGISTREMENT DES ENSEIGNANTS</a><br><br>
	<a class="button" href="requetes.php">REQUETES</a>
<h2>Liste générale des enseignants</h2>
<?php 
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
<h2>Formulaire d'enregistrement des séances de cours</h2>
<form action="" method="POST" >
<fieldset >
	<legend >Séance</legend>
	<table>
	<tr><td><b>Classe </b></td><td><select name="classe" id="classe" >
     <option  value="<?php echo $classe; ?>"><?php echo $classe; ?></option>
         <option  value="LIC1-ITER">LICENCE 1</option>
        <option  value="LIC2-ITER">LICENCE 2</option>
        <option  value="LIC3-ITER">LICENCE 3</option>
        <option  value="MAS1-ITER">MASTER 1</option>
        <option  value="MAS2-ITER">MASTER 2</option>
        <!--<option  value="2nde S">2nde S</option>
        <option  value="1ere L">1ere L</option>
        <option  value="1ere S">1ere S</option>
        <option  value="TA">TA</option>
        <option  value="TD">TD</option>
        <option  value="TC">TC</option>-->
     </select></td></tr>
	<tr><td><b>Matière </b></td><td><input type="text" name="matiere" value=""></td></tr>
	<tr><td><b>Jour </b></td><td><select name="jour" id="jour" >
     <option  value="<?php echo $jour; ?>"><?php echo $jour; ?></option>
         <option  value="LUNDI">LUNDI</option>
        <option  value="MARDI">MARDI</option>
        <option  value="MERCREDI">MERCREDI</option>
        <option  value="JEUDI">JEUDI</option>
        <option  value="VENDREDI">VENDREDI</option>
        <option  value="SAMEDI">SAMEDI</option>
     </select></td></tr>
  <tr><td><b>Heure </b></td><td><select name="heure" id="heure" >
     <option  value="<?php echo $heure; ?>"><?php echo $heure; ?></option>
         <option  value="08H-11H">08H-11H</option>
        <option  value="11H-14H">11H-14H</option>
        <option  value="14H-17H">14H-17H</option>
        <!--<option  value="1ere H">1ere H</option>
        <option  value="2eme H">2eme H</option>
        <option  value="3eme H">3eme H</option>
        <option  value="4eme H">4eme H</option>
        <option  value="5eme H">5eme H</option>
        <option  value="6eme H">6eme H</option>
        <option  value="2eme et 3eme H">2eme et 3eme H</option>
        <option  value="4eme et 5eme H">4eme et 5eme H</option>-->
     </select></td></tr>
  <tr><td><b>Matricule enseignant </b></td><td><input type="text" name="matricule" value=""></td></tr>
	<tr><td></td><td><input type="submit" name="benrg" value="ENREGISTRER" class="bouton"></td></tr>
	<tr><td></td><td><?php print $mess;?></td><td></td></tr>
	</table>
	</fieldset>
</form>

    <?php
    //suppréssion séance cours
    if(isset($_POST['bsupp'])&&!empty($id)){
        $sql=mysqli_query($conn,"delete from tb_cours where id='$id'");
        if($sql){
            $mess="<b>Suppression éffectuée avec succès !</b>";
        }
        else{
            $mess="<b>Erreur !</b>";
        }

    }

    ?>

    <h2>Supprimer une séance de cours</h2>
    <form action="" method="POST" >
        <table>
            <tr><td><b>ID </b></td><td><input type="text" name="id" value="<?php print $id;?>"></td></tr>
            <tr><td></td><td><input type="submit" name="bsupp" value="SUPPRIMER" class="bouton"></td></tr>
            <tr><td></td><td><?php print $mess;?></td></tr>
        </table>
    </form>
<?php 
print"<br><br>";
	//affichage liste séances cours
	$rq2=mysqli_query($conn,"select * from tb_cours order by id desc ");
	print'<table border="1" class="tab" ><tr><th>Classe</th><th>Matiere</th><th>Jour</th><th>Heure</th><th>Enseignant</th></tr>';
	while($rst2=mysqli_fetch_assoc($rq2)){
	  print"<tr>";
	         echo"<td>".$rst2['classe']."</td>";
	          echo"<td>".$rst2['matiere']."</td>";
	          echo"<td>".$rst2['Jour']."</td>";
	           echo"<td>".$rst2['heure']."</td>";
	           echo"<td>".$rst2['matricule_ens']."</td>";
	        
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