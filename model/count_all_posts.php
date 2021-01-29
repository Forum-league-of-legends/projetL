<?php
function count_all_posts($conn) {
    $nbarticle = $conn->query('SELECT COUNT(article) FROM topic');
    $nbarticles=$nbarticle->fetchAll();
    return $nbarticles;
}
?>