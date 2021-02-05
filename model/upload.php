<?php
session_start();
require ("model/connexion.php");
$dossier = 'upload/';
$fichier = basename($_FILES['avatar']['name']);
$taille_maxi = 10000000;
$taille = filesize($_FILES['avatar']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['avatar']['name'], '.'); 

if(!in_array($extension, $extensions)) 
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
}
if($taille>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) 
{
   
     $fichier = strtr($fichier, 
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) 
     {    
          $upload=$conn->prepare("UPDATE users SET avatar = ? WHERE id = ?");
          $upload->execute(array($dossier.$fichier,$_SESSION['id']));
          session_destroy();
          header('Location: login.php');        
     }
     else 
     {
          echo 'Echec de l\'upload !';
     }
}
else
{
     echo $erreur;
}

?>