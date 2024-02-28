<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Forum - UTT LOKO</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
</head>
<body>
<header>
	<nav style="width:100%;">
	<ul>
        <li><a style="background-color:#fff; color:#2a2f4a; font-weight:900;" class="btn" href="/proj_tut/index.html">HOME</a></li>
        <li><a style="background-color:#fff; color:#2a2f4a; font-weight:900;" class="btn" href="index.php">SIGN IN</a></li>
		<li><a style="background-color:#fff; color:#2a2f4a; font-weight:900;" class="btn" href="inscription.php">SIGN UP</a></li>
		<?php
		if(isset($_SESSION['nom']))
		{
			echo '<li><a style="background-color:#fff; color:#2a2f4a; font-weight:900;" href="logout.php">LOGOUT</a></li>';
		}
		?>
	</ul>
	</nav>
</header>
<section>
 <h1 class="titre">DISCUSSION FORUM LOGIN</h1>
</section>
<section>

<form action="" method="post" id="flogin">
<input type="text" name="email" placeholder="Your Email" class="ch"><br>
<input type="password" name="pw" placeholder="Your Password" class="ch"><br>
<input type="submit" name="valider" value="Sign in" class="ch">

<?php
include("connexion.php");

if(isset($_POST['valider']))
{
	$email=$_POST['email'];
	$mp=sha1($_POST['pw']);
$res=mysqli_query($cn,"select * from utilisateur where email_user='$email'
 and pw_user='$mp'");	
$nbr=mysqli_num_rows($res);
if($nbr==0)
echo '<br><br>Incorrect Email or Password!';
else
{
	$data=mysqli_fetch_assoc($res);
	$_SESSION['id_user']=$data['id_user'];
	$_SESSION['nom']=$data['nom_user'];
	$_SESSION['prenom']=$data['prenom_user'];
	$_SESSION['login']=$data['email_user'];
	$_SESSION['mp']=$data['pw_user'];
	header("location:forum.php");
} }
?>
</form>
</section>
</body>
</html>