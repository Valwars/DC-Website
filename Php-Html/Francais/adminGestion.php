<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'head.php'; ?>
    <title>Page Administration - DC.</title>
</head>

<?php 
//
 ?>

<body>

    <?php include 'menu_bar.php'; ?>

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

    <h4 class = "modif_user">
        
    <a id = "disc" href="../serveur/disconnect.php">Déconnexion</a>

    </h4>
  
    <h4 class = "modif_user" onclick="openForm();">Changer de mot de passe</h4>

    <section id="gestionPro">


        <div id="addPro">

            <h3>Ajout d'un projet :</h3>

            <form id="newProjet" action="../serveur/nouveauProjet.php" method="post" enctype="multipart/form-data">
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
                <Input type="file" name="file" ></Input>

                <h4>OU lien relatif au projet :</h4>
                <Input type="text"  name="link" ></Input>

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
                    <a class="linkdelete" href= "#" onclick= DelComment(<?php echo $recipe['idProjet'] ?>);>Supprimer ce projet</a>
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

    <div class="form-popup" id="myForm">
  <form action="../serveur/change_password.php" class="form-container" method="POST">
    <h1>Changer de mot de passe</h1>

    <label for="name"><b>UserName :</b></label>
    <input type="text" id = "name" name="name" required>

    <label for = "current_password"><b>Mot de passe actuel</b></label>
    <input type="password" id = "current_password" name="current_password" required>

    <label for='new_password'><b>Nouveau mot de passe :</b></label>
    <input type="password"  id = "new_password" name="new_password" required>
    <label for='new_password_retype'><b>Re - Nouveau mot de passe</b></label>
    <input type="password"  id = "new_password_retype" name="new_password_retype" required>

    <button type="submit" class="btn">Changer</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>


    <script>
        function openForm() {
  document.getElementById("myForm").style.display = "block";
  
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
    </script>


</body>

</html>