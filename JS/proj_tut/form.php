<!DOCTYPE HTML>

<html>
<head>
    <title>Contacts - UTT LOKO</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <a href="index.html" class="logo"><img src="assets/css/lokoo.png" alt=""> <span></span></a>
        <div class="langue" style="font-size: 12px; margin-top: 15px; margin-left: 800px;">
            <a href="form.php" class="button" style="height: 30px;"><p>Français</p></a>
            <a href="en/form.php" class="button" style="height: 30px;"><p>English</p></a>
        </div>
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </header>

    <!-- Menu -->
    <nav id="menu">
        <ul class="links">
            <li><a href="index.html">Accueil</a></li>
            <li><a href="generic.php">Inscription</a></li>
            <li><a href="galerie_FR/galerie.html">Galerie</a></li>
            <li><a href="filiere.html">Filières</a></li>
            <li><a href="EMPLOI/admin.php">Emploi du temps</a></li>
            <li><a href="notes/index.php">Gestion des notes</a></li>
            <li><a href="foum/index.php">Campus</a></li>
            <li><a href="form.php">Contactez-nous</a></li>
            <li><a href="landing.html">A propos</a></li>
        </ul>
    </nav>

    <!-- Banner -->
    <section id="banner" class="major">
        <div class="inner">
            <header class="major">
                <h1>Contactez-nous !</h1>
            </header>
            <div class="content">
                <p>Besoin de renseignements ?<br />
                    Remplissez le formulaire suivant...</p>

            </div>
        </div>
    </section>

    <!-- Main -->
    <div id="main">
        <section style="margin-left: 50px; margin-right: 50px;">
            <form method="post" action="form.php">
                <div class="fields">
                    <div class="field half">
                        <label for="name">Nom Complet</label>
                        <input type="text" name="name" id="name" required/>
                    </div>
                    <div class="field half">
                        <label for="email">Adresse Mail</label>
                        <input type="text" name="email" id="email" required/>
                    </div>
                    <div class="field">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="10" placeholder="Entrez votre message ici..." required></textarea>
                    </div>
                </div>
                <ul class="actions">
                    <li><input name="envoyer" type="submit" value="Envoyer le message" class="primary" /></li>
                    <li><input type="reset" value="Annuler" /></li>
                </ul>
            </form>
        </section>
    </div>
    <!-- Contact -->


    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <!--<ul class="icons">
                <li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
                <li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
            </ul>-->
            <ul class="copyright">
                <li>&copy; Université LOKO</li><li>Design:GROUPE 7</li>
            </ul>
        </div>
    </footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<!--Start of Tawk.to Script
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/62b0c3707b967b117995864b/1g617msl4';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>-->
<!--End of Tawk.to Script-->
</body>
</html>