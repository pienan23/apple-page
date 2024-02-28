<?php session_start();
include_once 'function/function.php';
include_once 'function/addPost.class.php';
$bdd = bdd();

if(!isset($_SESSION['id'])){

    header('Location: inscription.php');
}
else {
    
    if(isset($_POST['name']) AND isset($_POST['sujet'])){
    
    $addPost = new addPost($_POST['name'],$_POST['sujet']);
    $verif = $addPost->verif();
    if($verif == "ok"){
        if($addPost->insert()){
            
        }
    }
    else {/*Si on a une erreur*/
        $erreur = $verif;
    }
    
}
    
    
    ?>
<!DOCTYPE html>
<head>
    <meta charset='utf-8' />
    <title>Forum de discussion UTT-LOKO</title>
    
    <meta name="author" content="Thibault Neveu"> 
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="shortcut icon" href="../favicon/favicon.ico" />
    <link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
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
 <h1 style="text-align: center; margin-top: 20px">Bienvenue sur le Forum UTT !</h1>
    
            <div id="Cforum">
                <?php 
                
                 echo 'Bienvenue : <strong style="font-size: 25px;">'.$_SESSION['pseudo'].'</strong> 🙂 <a class="button" href="deconnexion.php">Deconnexion</a> ';
                if(isset($_GET['categorie'])){ /*SI on est dans une categorie*/
                    $_GET['categorie'] = htmlspecialchars($_GET['categorie']);
                    ?>
                    <div class="categories">
                      <h1><?php echo $_GET['categorie']; ?></h1>
                    </div>
                <a style="margin-bottom: 35px;" class="button primary" href="addSujet.php?categorie=<?php echo $_GET['categorie']; ?>">Ajouter un sujet</a>
                <?php 
                $requete = $bdd->prepare('SELECT * FROM sujet WHERE categorie = :categorie ');
                $requete->execute(array('categorie'=>$_GET['categorie']));
                while($reponse = $requete->fetch()){
                    ?>
                     <div class="categories">
                         <a class="button" href="index.php?sujet=<?php echo $reponse['name'] ?>"><h1><?php echo $reponse['name'] ?></h1></a>
                    </div>
                    <?php
                }
                ?>
                
                    
                    <?php
                }
                
                else if(isset($_GET['sujet'])){ /*SI on est dans une categorie*/
                    $_GET['sujet'] = htmlspecialchars($_GET['sujet']);
                    ?>
                    <div class="categories">
                      <h1><?php echo $_GET['sujet']; ?></h1>
                    </div>
                
                <?php 
                $requete = $bdd->prepare('SELECT * FROM postSujet WHERE sujet = :sujet ');
                $requete->execute(array('sujet'=>$_GET['sujet']));
                while($reponse = $requete->fetch()){
                    ?>
                <div class="post">
                    <?php 
                     $requete2 = $bdd->prepare('SELECT * FROM membres WHERE id = :id');
                     $requete2->execute(array('id'=>$reponse['propri']));
                     $membres = $requete2->fetch();
                     echo "<strong style='font-size: 26px; margin-left: 50px;'>". $membres['pseudo'] ."</strong>";
                     echo ': <br>';
                     
                     echo "<p style='font-size: 18px; margin-left: 50px;'>".$reponse['contenu']."</p>";
                    ?>
                 </div> 
                <?php
                   
                }
                ?>
                
                 <form method="post" action="index.php?sujet=<?php echo $_GET['sujet']; ?>">
                        <textarea name="sujet" placeholder="Votre message..." ></textarea>
                        <input type="hidden" name="name" value="<?php echo $_GET['sujet']; ?>" />
                        <input type="submit" value="Ajouter à la conversation" />
                        <?php 
                        if(isset($erreur)){
                            echo $erreur;
                        }
                        ?>
                    </form>
                <?php
                }
                else { /*Si on est sur la page normal*/
                    
                       
                
                        $requete = $bdd->query('SELECT * FROM categories');
                        while($reponse = $requete->fetch()){
                        ?>
                            <div class="categories">
                                <a style="margin-top: 30px;" class="button" href="index.php?categorie=<?php echo $reponse['name']; ?>"><?php echo $reponse['name']; ?></a>
                              </div>
                
                    <?php 
                    }
                    
                }
                 ?>
                
                
                
                
                
            </div>
</body>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</html>
    <?php
}
?>

    
