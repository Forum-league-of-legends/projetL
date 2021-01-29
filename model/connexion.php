<?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            
            //On établit la connexion
            try {
            	$conn = new PDO("mysql:host=localhost;dbname=registration", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
    		catch(PDOException $e)
    		{
            	die('erreur : '.$e->getMessage());
    		}
            
        ?>