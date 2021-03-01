<?php

    function search_all_posts($conn) {
    	$reponse = $conn->query('SELECT U.username, T.titre,T.date,T.article,T.id,T.id_users,U.avatar FROM users as U INNER JOIN topic as T ON U.id=T.id_users WHERE category=0 ORDER BY date desc');
    	$results = $reponse->fetchAll();


    return $results;
    }

    ?>
