<?php

include 'connexion_bdd.php';


if(!empty($_POST["link"])){

    $insert = $bdd->prepare('INSERT INTO Projets(nomProjet,type,imagePath,lien) VALUES(:nomProjet,:type,:imagePath, :lien)');
    
    $nom = htmlspecialchars($_POST["nom"]);
    $type = htmlspecialchars($_POST["selec"]);
    $imagePath = htmlspecialchars($_FILES["img"]["name"]);
    $lien = htmlspecialchars($_POST["link"]);
    
    
    $insert->execute(array(
        'nomProjet' => $nom,
        'type' => $type,
        'imagePath' =>  "../../uploads/" . $imagePath,
        'lien' =>  $lien,
        
    ));


}else{
    move_uploaded_file($_FILES["img"]["tmp_name"],  "../../uploads/".$_FILES["img"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"],  "../../uploads/".$_FILES["file"]["name"]);
    

    $insert = $bdd->prepare('INSERT INTO Projets(nomProjet,type,imagePath, pdfPath) VALUES(:nomProjet,:type,:imagePath, :pdfPath)');
    
    $nom = htmlspecialchars($_POST["nom"]);
    $type = htmlspecialchars($_POST["selec"]);
    $imagePath = htmlspecialchars($_FILES["img"]["name"]);
    $pdfPath = htmlspecialchars($_FILES["file"]["name"]);
    
    
    $insert->execute(array(
        'nomProjet' => $nom,
        'type' => $type,
        'imagePath' =>  "../../uploads/" . $imagePath,
        'pdfPath' =>  "../../uploads/" . $pdfPath,
        
    ));

}


// On redirige avec le message de succès
header('Location:../Francais/adminGestion.php?reg_err=success');
