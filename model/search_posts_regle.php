<?php

    function search_posts_regle($conn) {
    	$reponse = $conn->query('SELECT U.username, T.titre,T.date,T.article FROM users as U INNER JOIN topic as T ON U.id=T.id_users WHERE category=1 GROUP BY date DESC');
    	$results = $reponse->fetchAll();

    return $results;
    }

    ?>
