<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include 'EN-head.php'; ?>

    <title>Ressources - DC</title>
</head>

<body>

<?php include 'EN-menu_bar.php'; ?>

<script>
    document.querySelectorAll('.itLink').forEach(item => {


        if (item.id = "selectedItem") {

            item.id = item.innerHTML;

        }

    })

    var itemSelected = document.getElementById("Resources");
    itemSelected.id = "selectedItem";
</script>


<div id="PresentationDiv">


    <h3>Ressources</h3>


</div>

<div id = "outils" class = "selected">
<h3>Outils développés</h3>

</div>
<section id = "projets">

        <?php

        try {
            $bdd =  new PDO('mysql:host=localhost;dbname=Damien Connetable WebSite;charset=utf8', 'root', '');
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }

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