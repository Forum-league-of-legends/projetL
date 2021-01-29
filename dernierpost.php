<?php 
session_start();
require 'model/connexion.php';
require 'view/header.php';
require "model/search_all_posts.php";
$resultes=search_all_posts($conn);
require "model/count_all_posts.php";
$count=count_all_posts($conn);
require 'view/listedernierpost.php';

?>