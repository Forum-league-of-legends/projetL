<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/connexion.css" />
</head>
<body>
<?php
require('model/connexion.php');
if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
  $message="Votre nom d'utilisateur ou votre email est déja utilisé";
  $username=$_POST['username'];
  $email=$_POST['email'];
  $testusername = $conn->prepare("SELECT * FROM `users` WHERE username=? ");
  $testusername->execute(array($username));
  $testemail = $conn->prepare("SELECT * FROM `users` WHERE email=? ");
  $testemail->execute(array($email));
  $fintestusername = $testusername->fetchAll();
  $fintestemail = $testemail->fetchAll();
  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $emailvalide=1;
  }
  else {
      $emailvalide=0;
      $message="L'adresse email n'est pas valide";
        }
  if (empty($fintestusername) and empty($fintestemail) and $emailvalide==1){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=sha1($_POST['password']);
    $reponse = $conn->prepare("INSERT into users (username, email, password,role) VALUES (?, ?, ?,0)");
    $reponse->execute(array($username,$email,$password));
  
    if($reponse)
    { 
      echo "<div class='sucess'>
             
        <h3>Vous êtes inscrit avec succès.</h3>
        <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
        </div>";
    }
  
  } 
  else 
  {
      echo "<div class='echec'>
        <h3 > $message </h3>
        <p>Veuillez réessayer</p>
        </div>";
  }
}
  ?>
<form class="box" action="" method="post">
    <a  href="index.php">
            <img id="icone"src="img/icone.png" />
    </a>
    <h1 class="box-title">S'inscrire</h1>
  <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
    <input type="text" class="box-input" name="email" placeholder="Email" required />
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
    <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
</form>
</body>
</html>