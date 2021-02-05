<?php
session_start();
if (isset($_SESSION['username'])){
    require 'model/connexion.php';
    require 'view/header.php';
    require 'view/profil.php';}
 else header("location:login.php")
?>
