<?php

    function delete($conn) {
        $reponse = $conn->prepare('delete from topic where id= ?');
        $reponse->execute(array($_GET['id']));
       
    }


?>
