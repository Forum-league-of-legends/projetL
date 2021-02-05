<?php 
session_start();
require 'model/connexion.php';
require "model/search_posts_regle.php";
require"view/header.php";
$resultes= search_posts_regle($conn);
require "model/count_all_posts.php";
require 'view/listpost.php';
?>