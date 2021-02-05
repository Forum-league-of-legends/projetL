<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/connexion.css" />
</head>
<body>
<?php
require('model/connexion.php');
session_start();
if (isset($_POST['username'])){
  $username=$_POST['username'];
  $password=sha1($_POST['password']);
  $reponse = $conn->prepare("SELECT * FROM `users` WHERE username=? and password=?");
  $reponse->execute(array($username,$password));
  $results = $reponse->fetchAll();
  

  }
  if(empty($results)){
      $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
  else{
    $_SESSION['username']=$username ;
    header('Location:index.php');
    foreach($results as $value){
    $_SESSION["email"]=$value["email"];
    $_SESSION["id"]=$value["id"];
    $_SESSION["avatar"]=$value["avatar"];
  }
}
?>
<form class="box" action="" method="post" name="login">
    <a  href="index.php">
            <img id="icone"src="img/icone.png" />
    </a>
<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
<input type="password" class="box-input" name="password" placeholder="Mot de passe">
<input type="submit" value="Connexion " name="submit" class="box-button">
<p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>