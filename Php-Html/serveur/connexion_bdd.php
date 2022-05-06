<?php 

// change en fonction du host.

try {
    $bdd =  new PDO('mysql:host=localhost;dbname=Damien Connetable WebSite;charset=utf8', 'root', '');
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}


?>