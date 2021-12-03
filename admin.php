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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/admin.css">
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
            <li><a href="#">Présentation</a></li>
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
            <a href="logout.php">Logout</a>
        </ul>
    </header>
    <section class="main"></section>
    <div class="container">
        <div class="img">
            <img src="img/avatar.svg">
        </div>
        <div class="title">
            <h1>Administrateur</h1>
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
</body>
</html>