<?php
session_start();
?>
<html>
<head>
	<title>Forum - UTT LOKO</title>
 <meta charset="utf-8">
<link rel="stylesheet" href="style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
</head>
<body>
  <header>
  <nav style="width:100%;">
  <ul>
      <li><a href="/proj_tut/index.html" style="background-color:#fff; color:#2a2f4a; font-weight:900;">HOME</a></li>
      <li><a href="index.php" style="background-color:#fff; color:#2a2f4a; font-weight:900;">SIGN IN</a></li>
    <li><a href="inscription.php" style="background-color:#fff; color:#2a2f4a; font-weight:900;">SIGN UP</a></li>
      <?php
    if(isset($_SESSION['nom']))
    {
      echo '<li><a href="logout.php"  style="background-color:#fff; color:#2a2f4a; font-weight:900;">LOGOUT</a></li>';
    }
    ?>
  </ul>
  </nav>
</header>
<section>
 <h1 class="titre">REGISTRATION TO THE FORUM</h1>
</section>
<form action="" method="post" id="inscription" enctype="multipart/form-data">
<input type="text" name="nom" placeholder="Last Name" class="ch" required="required"><br>
<input type="text" name="prenom" placeholder="First Name" class="ch" required="required"><br>
<input type="email" name="email" placeholder="EMail" class="ch" required="required"><br>
<input type="password" name="mp1" placeholder="Password" class="ch" required="required"><br>
<input type="password" name="mp2" placeholder="Confirm the password" class="ch" required="required"><br>
<input type="file" name="photo" class="ch">
<input type="submit" name="valider" value="Send" class="ch">
<?php
include("connexion.php");

if(isset($_POST['valider']))
{
	$nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $email=$_POST['email'];
  $mp1=$_POST['mp1'];
  $mp2=$_POST['mp2'];

if($mp1==$mp2)
{
  $mp=sha1($mp1);
  $res=mysqli_query($cn,"insert into utilisateur values (NULL,'$nom','$prenom','$email','$mp')");  

$id=mysqli_insert_id($cn);
$photo="$id.jpg";

move_uploaded_file($_FILES['photo']['tmp_name'], "images/$photo");
echo '<h4>Sucessful registration!</h4>';
}
else
  echo '<h4>Verify the passwords</h4>';

}
?>



</form>
</div>
</body>

</html>