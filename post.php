<?php
session_start();
if (isset($_SESSION['username'])){
    require 'model/connexion.php';
    require 'view/header.php';
    require 'view/publication.php';}
 else header("location:login.php")
?>

