<?php
    session_start();
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    try
    {
        
        $bdd = new PDO('mysql:host=localhost;dbname=website;charset=utf8', 'admin','Zebidu56@',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
    
        die('Erreur : '.$e->getMessage());
    }
    $pass = true;
    if (isset($_POST["username"]) AND isset($_POST["password"])) {
      $req = $bdd -> query("SELECT * FROM users");
      while($donnees = $req -> fetch()){
        if($_POST["username"] == $donnees["username"] AND password_verify($_POST['password'], $donnees['password'])){
            echo "OK";
            $_SESSION['username'] = $_POST["username"];
            header("Location: index.php");
            die();
        }else {
          $pass = false;
        }
      }
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
    <link rel="shortcut icon" href="img/logo.png"/>
    <!-- CSS -->
    <link rel="stylesheet" href="css/login.css">
    <!-- Icône -->
    <script src="https://kit.fontawesome.com/229e0007f4.js" crossorigin="anonymous"></script>
</head>
<body>
<img class="wave" src="img/wave_login.png">
	<div class="container">
		<div class="img">
			<img src="img/background.png">
		</div>
		<div class="login-content">


			<form method="POST" action="login_final.php">
				<img src="img/avatar.svg">

				<h2 class="title">Se connecter</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
					  	<input type="text" name="username" required>
						<h5>Identifiant</h5>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" name="password" required>
						<h5>Mot de passe</h5>
            	   </div>
            	</div>
            	<a href="#">J'ai besoin d'aide</a>
            	<?php
                    if($pass == false){
                        echo "L'identifaint ou le mot de passe semble incorrect";
                    }
                ?>
                <input type="submit" class="btn" name = 'submit' id='submit'>

				<a target="_blank" href="https://help.assoconnect.com/hc/fr/articles/202666862-Je-n-arrive-pas-%C3%A0-me-connecter-%C3%A0-mon-compte" class="register">Je n'ai pas de compte</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>