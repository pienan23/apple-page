<?php session_start();
include_once 'function/function.php';
include_once 'function/addSujet.class.php';
$bdd = bdd();

if(isset($_POST['name']) AND isset($_POST['sujet'])){
    
    $addSujet = new addSujet($_POST['name'],$_POST['sujet'],$_POST['categorie']);
    $verif = $addSujet->verif();
    if($verif == "ok"){
        if($addSujet->insert()){
            header('Location: index.php?sujet='.$_POST['name']);
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
 <h1>Ajouter un sujet</h1>
    
            <div id="Cforum">
                <?php  echo 'Bienvenue : '.$_SESSION['pseudo'].'🙂 <a class="button" href="deconnexion.php">Deconnexion</a> '; ?>
                
                <form method="post" action="addSujet.php?categorie=<?php echo $_GET['categorie']; ?>">
                    <p>
                        <br><input type="text" name="name" placeholder="Nom du sujet..." required/><br>
                        <textarea name="sujet" placeholder="Contenu du sujet..."></textarea><br>
                        <input type="hidden" value="<?php echo $_GET['categorie']; ?>" name="categorie" />
                        <input type="submit" value="Ajouter le sujet" />
                        <?php 
                        if(isset($erreur)){
                            echo $erreur;
                        }
                        ?>
                    </p>
                </form>
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
