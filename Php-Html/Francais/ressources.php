<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include 'head.php'; ?>

    <title>Ressources - DC</title>
</head>

<body>

<!-- Barre de navigation -->

<?php include 'menu_bar.php'; ?>

<script>

    // Change la couleur de l'item correspondant au titre de la page selectionné.

    document.querySelectorAll('.itLink').forEach(item => {


        if (item.id = "selectedItem") {

            item.id = item.innerHTML;

        }

    })

    var itemSelected = document.getElementById("Ressources");
    itemSelected.id = "selectedItem";
</script>


<div id="PresentationDiv">


    <h3>Ressources</h3>


</div>

<div id = "outils" class = "selected">

<h3>Outils développés</h3>

</div>

<!-- Affiche les projets "outils" -->
<section id = "projets">

        <?php

        include '../serveur/connexion_bdd.php';


        $sqlQuery = "SELECT * FROM Projets WHERE type = 'outil' ORDER BY idProjet DESC  ";
        $recipesStatement = $bdd->prepare($sqlQuery);
        $recipesStatement->execute();
        $recipes = $recipesStatement->fetchAll();

        foreach ($recipes as $recipe) {
        ?>  
            <a href = "<?php echo $recipe['pdfPath']; ?>" target="_blank">
          
            <div class="projet" id ="p<?php echo $recipe['idProjet']; ?>">

                <img class="artimg" src="<?php echo $recipe['imagePath']; ?>" alt="">


                <p id="nameProjet"><?php echo $recipe['nomProjet']; ?></p>

            </div>
            </a>

        <?php
        }
        ?>

        </div>


    </section>



</body>

</html>