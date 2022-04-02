<?php 
try {
    $bdd =  new PDO('mysql:host=localhost;dbname=Damien Connetable WebSite;charset=utf8', 'root', '');
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

$id = $_GET['id'];

$delete  = "DELETE FROM Projets WHERE idProjet= $id";

$stmt = $bdd->prepare($delete);

// execute the query
$stmt->execute();

// On redirige avec le message de succès
$url = 'Location:../Anglais/EN-adminGestion.php?reg_err=success';

header($url);
