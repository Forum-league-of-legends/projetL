<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/profil.css" />
</head>
<body>

<div class="page">

<?php


require ("model/connexion.php");

if(isset($_SESSION['id'])) {
   $requser = $conn->prepare("SELECT * FROM users WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetchAll();

   if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $_SESSION['username']) {
      $newpseudo = htmlspecialchars($_POST['newpseudo']);
      $insertpseudo = $conn->prepare("UPDATE users SET username = ? WHERE id = ?");
      $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
      session_destroy();
      header('Location: login.php');

   }
   if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $_SESSION['email']) {
      $newmail = htmlspecialchars($_POST['newmail']);
      $insertmail = $conn->prepare("UPDATE users SET email = ? WHERE id = ?");
      $insertmail->execute(array($newmail, $_SESSION['id']));
      session_destroy();
      header('Location: login.php');
   }
   if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
      $mdp1 = sha1($_POST['newmdp1']);
      $mdp2 = sha1($_POST['newmdp2']);  
      if($mdp1 == $mdp2) {
         $insertmdp = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['id']));
         session_destroy();
         header('Location: login.php');
      } else {
         $msg = "Vos deux mots de passe ne correspondent pas !";
      }
   }
   
 }

?>


	
   
   
      <div align="center">
         <h2>Edition du profil de <?php echo $_SESSION['username']; ?> </h2>
         <div align="left ">
            <form method="POST" action="" enctype="multipart/form-data">
               <label>Pseudo :</label>
               <input type="text" name="newpseudo"  value="<?php echo $_SESSION['username']; ?>" > <br> <br>
               <label>Mail :</label>
               <input type="text" name="newmail"  value="<?php echo $_SESSION['email']; ?>" > <br> <br>
               <label>Nouveau mot de passe :</label>
               <input type="password" name="newmdp1" > <br> <br>
               <label>Confirmation - Nouveau mot de passe :</label>
               <input type="password" name="newmdp2"  > <br> <br>
               <input type="submit" value="Mettre à jour mon profil !" />
            </form>
            
              <form action="upload.php" method="post" enctype="multipart/form-data">
                  <h2>Avatar :</h2>
                  <label for="fileUpload">Fichier:</label>
                  <input type="file" name="avatar" id="fileUpload">
                  <input type="submit" name="submit" value="Upload">               
            </form>
              <?php echo "<img src='".$_SESSION['avatar']."' />";?>
         </div>
      </div>
 </div>
   </body>

</html>