<?php
  session_start();
  if(isset($_SESSION['username'])){
    header("Location: index_loged.php");
        die();
  }
  if($_SESSION['username'] == 'admin'){
      header("Location: admin.php");
            die();
  }


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- En-tête -->
    <title>Sauveteurs du dunkerquois</title>
    <link rel="icon" href="img/logo.png">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/footer.css">
    <!-- Icône -->
    <script src="https://kit.fontawesome.com/229e0007f4.js" crossorigin="anonymous"></script>
</head>
<style>
    /* Scrollbar */
    ::-webkit-scrollbar {
        width: 10px;
	    background-color: #F5F5F5;
    }
    ::-webkit-scrollbar-track {
        box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        border-radius: 10px;
        background-color: #F5F5F5;
    }
    ::-webkit-scrollbar-thumb {
	border-radius: 10px;
	box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: #2b4162;
    }
</style>
<body>
    <header>
        <a href="#landing" class="logo">
            <img src="img/logo.png" class="img-logo">
        </a>
        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i> 
            <i class="fas fa-times" id="cancel"></i> 
        </label>
        <ul>
            <li><a href="#presentation">Présentation</a></li>
            <li><a href="#recherche">Recherche</a></li>
            <li class="nav-item dropdown"><a class="dropbtn">Catégories <i class="fa fa-caret-down"></i></a>
                <div class="dropdown-content">
                    <a href="">Sauveteurs</a>
                    <a href="">Sorties en mer</a>
                    <a href="">Stations</a>
                    <a href="">Moyens maritimes</a>
                    <a href="">Techniques</a>
                    <a href="">Historiques</a>
                    <a href="">Compléments</a>
                    <a href="">Estaminet</a>
                </div>
            </li>
            <li><a href="login_final.php">Se connecter</a></li>
            <li><a href="register_final.php">S'inscrire</a></li>
        </ul>
       
        
    </header>
    <section class="landing" id="landing">
        <div class="landing-text">
            <h2>Sauveteurs  du dunkerquois</h2>
            <!-- <p>
                Magna ea magna sint ex ut. Nulla et pariatur quis culpa aliquip et eu quis aliquip. 
                Duis sint exercitation officia Lorem cillum proident consectetur.
            </p> -->
        </div>
        <div class="wave" id="wave1" style="--i:1"></div>
        <div class="wave" id="wave2" style="--i:2"></div>
        <div class="wave" id="wave3" style="--i:3"></div>
        <div class="wave" id="wave4" style="--i:4 "></div>
    </section>
    <div class="corps">
        <h2 id="presentation"> Présentation </h2>
        <div class="grille">
            <div class="grid-item">
                Bienvenue sur le site des sauveteurs du dunkerquois. Ce site rend hommage aux femmes, hommes et enfants qui ont réalisé des actes de sauvetages en milieu aquatique.
Ces sauveteurs, habitants du dunkerquois (de Bray-Dunes à Grand-Fort-Philippe), ont participé à plus de 900 sauvetages en mer et plus de 1100 sauvetages individuels. Œuvrant avec courage, abnégation et souvent au mépris du risque ils méritent amplement que leurs actes soient pérennisés.
            </div>
            <div class="grid-item">
                <img src="img/snsm.png" class="img-grid">
            </div>
        </div>
        <div class="recherche" id="recherche">
            <h2>A la recherche de...</h2>
            <p>Entrez le sauveteur ou le sauvetage que vous voulez retrouver</p>
            <form action="info.php" method="post">
                <i class="fas fa-search" id="loupe"></i>
                <input type="text" class="search" name="recherche" placeholder="Rechercher...">
                <input type="submit" name="rechercher" value="Rechercher">
            </form>
        </div>
    </div>
    <div class="footer-wave" id="wave5" style="--i:1"></div>
    <div class="footer-wave" id="wave6" style="--i:2"></div>
    <div class="footer-wave" id="wave7" style="--i:3"></div>
    <div class="footer-wave" id="wave8" style="--i:4 "></div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Site</h4>
                    <ul>
                        <li><a href="#">Présentation</a></li>
                        <li><a href="#">Recherche</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Catégories</h4>
                    <ul>
                        <li><a href="">Sauveteurs</a></li>
                        <li><a href="">Sorties en mer</a></li>
                        <li><a href="">Stations</a></li>
                        <li><a href="">Moyens maritimes</a></li>
                        <li><a href="">Techniques</a></li>
                        <li><a href="">Historiques</a></li>
                        <li><a href="">Compléments</a></li>
                        <li><a href="">Estaminet</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Compte</h4>
                    <ul>
                        <li><a href="#">S'inscrire</a></li>
                        <li><a href="#">Se connecter</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Nous contacter</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/groups/938396409644949 "><i class="fab fa-facebook-f"></i></a>
                        <a href="http://boutelierphili1/"><i class="fab fa-twitter"></i></a>
                        <a href="mailto:sauveteurdudunkerquois@gmail.com"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>
    <!-- JavaScript -->
    <script src="js/script.js" defer></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/egg.js/1.0/egg.min.js"></script>
</body>
</html>