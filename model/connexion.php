<?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            
            //On établit la connexion
            try {
            	$conn = new PDO("mysql:host=localhost;dbname=register", $username, $password);
			}
    		catch(PDOException $e)
    		{
            	die('erreur : '.$e->getMessage());
    		}
        ?>