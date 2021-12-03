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
    <link rel="stylesheet" href="css/register.css">
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
			<form method="POST" action="db.php">
				<img src="img/avatar.svg">
				<h2 class="title">S'inscrire</h2>
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
				<div class="input-div pass">
           		   <div class="i"> 
						<i class="fas fa-user-check"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" name="Verif_password" required>
						<h5>Vérifier le mot de passe</h5>
            	   </div>
            	</div>
				<div class="input-div pass">
           		   <div class="i"> 
						<i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="email" placeholder="Entrez votre adresse mail" name="mail" required>
						<h5>E-mail</h5>
            	   </div>
            	</div>
            	<a href="#">J'ai besoin d'aide</a>
            	<input type="submit" name = 'submit' id='submit'>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>