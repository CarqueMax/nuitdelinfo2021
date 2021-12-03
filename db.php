<?php
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
  try
  {
  	
  	$bdd = new PDO('mysql:host=localhost;dbname=website;charset=utf8', 'root','root',
  	array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
  catch(Exception $e)
  {
  	
          die('Erreur : '.$e->getMessage());
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Validation compte</title>
  </head>
  <body>

    <?php
      session_start();

  		if (isset($_POST['username']) AND isset($_POST['password']) AND isset($_POST['Verif_password']) AND isset($_POST['mail']))
  				{
            if($_POST['password'] == $_POST['Verif_password']){
              $date = date('d-m-y h:i:s');
              $req = $bdd->prepare('INSERT INTO users(username, email, password, register_date, admin)
                                    VALUES(:username, :email, :password, :register, :admin)');
              $req -> execute(array(
                'username' => htmlentities($_POST['username']),
                'email' => htmlentities($_POST['mail']),
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'register' => $date,
                'admin' => 0
              ));


              $_SESSION['username'] = htmlentities($_POST['username']);
              $_SESSION['email'] = htmlentities($_POST['mail']);
              $_SESSION['admin'] = 0;
            }


      }
      header("Location: login_final.php");
      die();
     ?>
  </body>
</html>