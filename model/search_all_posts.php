<?php

    function search_all_posts($conn) {
    	$nom_auteur="";
   		$titre_topic="":
    	$reponse = $conn->query('select users.username, topic.titre, topic.date, topic.article, topic.id from users inner join topic on users.id = topic.id_users ');
    	$results = $reponse->fetchAll();


    return $results;
    }

    ?>
