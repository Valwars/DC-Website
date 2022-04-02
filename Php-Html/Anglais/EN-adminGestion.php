<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'EN-head.php'; ?>
    <title>Page Administration - DC.</title>
</head>

<?php 
if ($_GET['token'] == null) {
    header('HTTP/1.0 404 Not Found');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p></body></html>');
}
 ?>


<body>

    <?php include 'EN-menu_bar.php'; ?>

    <script>
        document.querySelectorAll('.itLink').forEach(item => {


            if (item.id = "selectedItem") {

                item.id = item.innerHTML;

            }

        })

        var itemSelected = document.getElementById("Administration");
        itemSelected.id = "selectedItem";


        function DelComment(id) {
            if (confirm("Voulez vous vraiment supprimer cet article ?")) {
                window.location = '../serveur/deleteProjet.php?id=' + id;
            } else {
                alert("L'article n'a pas été supprimé.")
            }
        }

        function updateTextareaHeight(input) {
            input.style.height = 'auto';
            input.style.height = input.scrollHeight+'px';
        }

    </script>

    <div id="PresentationDiv">


        <h3>Gestion d'administration</h3>


    </div>

    <section id="gestionPro">

        <div id="addPro">

            <h3>Ajout d'un projet :</h3>

            <form id="newProjet" action="../EN-serveur/nouveauProjet.php" method="post" enctype="multipart/form-data">
                <h4>Nom ou description du projet :</h4>
                <textarea id = "txt" name="nom" col="40" rows="1" class="form-control" required  oninput="updateTextareaHeight(this);"></textarea> 

                <h4>Type (Projets / Outils):</h4>
                <select id="selecteur" name = "selec" required form="newProjet">
            
                <option  value="projet">Projet</option>
                <option  value="outil">Outils</option>

                </select>

                <h4>Image du projet :</h4>
                <Input type="file" name="img" required></Input>
                <h3 style="margin-top: 10%; text-decoration:underline;">Choisir entre fichier et lien !</h3>

                <h4>Fichier relatif au projet :</h4>
                <Input type="file" name="file" required></Input>

                <h4>OU lien relatif au projet : </h4>
                <Input type="text" name="file" required></Input>

                <button type="submit" class="btn btn-success">Ajouter le projet à la base de donnée</button>

            </form>


        </div>


        <form id="existantPro">
            <h3>Projets existants :</h3>
            <?php

            try {
                $bdd =  new PDO('mysql:host=localhost;dbname=Damien Connetable WebSite;charset=utf8', 'root', '');
            } catch (PDOException $e) {
                die('Erreur : ' . $e->getMessage());
            }

            $sqlQuery = "SELECT * FROM Projets WHERE type = 'projet' ORDER BY idProjet DESC  ";
            $recipesStatement = $bdd->prepare($sqlQuery);
            $recipesStatement->execute();
            $recipes = $recipesStatement->fetchAll();

            $count = 1;
            foreach ($recipes as $recipe) {
            ?> <div>
            
                    <p><?php echo $count . "- " . $recipe["nomProjet"] ?></p>
                    <a class="linkdelete" href= # onclick= DelComment(<?php echo $recipe['idProjet'] ?>);>Supprimer ce projet</a>
                </div>

            <?php
                $count = $count + 1;
            }
            ?>

            <h3>Outils existants :</h3>
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

            $count = 1;
            foreach ($recipes as $recipe) {
            ?> <div>
            
                    <p><?php echo $count . "- " . $recipe["nomProjet"] ?></p>
                    <a class="linkdelete" href= # onclick= DelComment(<?php echo $recipe['idProjet'] ?>);>Supprimer ce projet</a>
                </div>

            <?php
                $count = $count + 1;
            }
            ?>

        </form>


      

    </section>


</body>

</html>