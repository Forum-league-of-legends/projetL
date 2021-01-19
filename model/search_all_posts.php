<?php

    function search_all_posts($test) {

    $reponse = $test->query('select AU.nom, AR.titre, AR.description, AR.id from auteurs as AU inner join articles as AR on AU.id = AR.id_auteur ');
    $results = $reponse->fetchAll();

    return $results;
    }

    ?>
