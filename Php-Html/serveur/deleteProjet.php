<?php 

include 'connexion_bdd.php';


$id = $_GET['id'];

$delete  = "DELETE FROM Projets WHERE idProjet= $id";

$stmt = $bdd->prepare($delete);

// execute the query
$stmt->execute();

// On redirige avec le message de succès
$url = 'Location:../Francais/adminGestion.php?reg_err=success';

header($url);
