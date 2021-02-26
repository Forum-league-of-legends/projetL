<?php
$id = $_GET['id'];

require 'model/connexion.php';
require 'model/deletepost.php';
delete($conn);
require 'view/header.php';
require "model/search_posts_regle.php";
$resultes= search_posts_regle($conn);
header('location:dernierpost.php')


?>