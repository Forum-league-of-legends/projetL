<?php
if (isset($_POST['titre'],$_POST['contenu'])){
    $titre=htmlspecialchars($_POST['titre']);
    $contenu = htmlentities($_POST['contenu'], ENT_QUOTES ,"UTF-8");
    $id_auteur=$_SESSION['id'];
    $reponse = $conn->prepare('INSERT INTO topic(titre,article,id_users,category) VALUES (?,?,?,0)');
    $reponse->execute(array($titre,$contenu,$id_auteur));

    }

   
