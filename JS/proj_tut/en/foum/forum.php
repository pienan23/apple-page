<?php
session_start();
if(isset($_SESSION['login']) and isset($_SESSION['mp']))
{
  include("connexion.php");
?>
<html>
<head>
	<title>Forum - UTT LOKO</title>
 <meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
</head>
<body class="is-preload">
<div class="marge"></div>
<header>
  <nav style="width:100%;">
  <ul>
      <li><a style="background-color:#fff; color:#2a2f4a; font-weight:900;" href="/proj_tut/index.html">HOME</a></li>
      <li><a style="background-color:#fff; color:#2a2f4a; font-weight:900;" href="index.php">SIGN IN</a></li>
    <li><a style="background-color:#fff; color:#2a2f4a; font-weight:900;" href="inscription.php">SIGN UP</a></li>
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
 <h1 class="titre">WELCOME TO THE UTT-LOKO DISCUSSION FORUM</h1>
</section>
<section id="sect1">
<?php
  /* changer le format de la date en français*/
function changedate($dt)

{
$tab = explode("-",$dt);
$nd = $tab[2]."-".$tab[1]."-".$tab[0];
return $nd;
}

$res=mysqli_query($cn,"select * from utilisateur,message where utilisateur.id_user=message.id_user order by id_message Desc");
while($data=mysqli_fetch_assoc($res))
{
  echo '<div id="div1">
  <img src="images/'.$data['id_user'].'.jpg" class="photo" width="30px" height="30px">';
  echo $data['nom_user'];
  echo '<br>'.$data['prenom_user'].'</div>';
   echo '<div id="div2">Posté le : '.changedate($data['date_message']);
  echo ' à '.$data['heure_message'];
  echo '<br>'.$data['texte_message'].'</div>';
 
}

?>

<form action="" method="post">
<textarea name="message"  placeholder="Your message" id="zmessage"></textarea>
<input type="submit" name="envoyer" value="Send" class="primary">
</form>
<?php
if(isset($_POST['envoyer']))
{

  $id=$_SESSION['id_user'];
  $msg=$_POST['message'];
  $date=date('Y-m-d');
  $heure=date('H:i');
  $req1=mysqli_query($cn,"insert into message values (NULL,'$msg','$date','$heure','$id')"); 
header("location:forum.php");
}

?>

</section>



</body>
</html>
<?php
}
else
header("location:index.php");
?>
