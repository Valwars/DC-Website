<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'EN-head.php'; ?>
    <title>Administration - DC.</title>
</head>


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
    </script>

    <div id="PresentationDiv">


        <h3>Administration</h3>


    </div>




        <h2 id="conne">Page de connexion administrateur</h2>

        <div class="login-form">
        <?php
        if (isset($_GET['login_err'])) {
            $err = htmlspecialchars($_GET['login_err']);

            switch ($err) {
                case 'password':
        ?>
                    <div class="alert alert-danger">
                        <strong>Erreur Mot de passe incorrect</strong> 
                    </div>
                <?php
                    break;

                case 'email':
                ?>
                    <div class="alert alert-danger">
                        <strong>Erreur Email incorrect</strong> 
                    </div>
                <?php
                    break;

                case 'already':
                ?>
                    <div class="alert alert-danger">
                        <strong>Erreur Compte non existant</strong> 
                    </div>
        <?php
                    break;
            }
        }
        ?>

        <form id="loginForm" action="../EN-serveur/admin.php" method="post">

            <h3>Compte administrateur :</h3>
            <input  name="name" class="form-control" required="required" autocomplete="off">

            <h3>Mot de passe :</h3>
            <input type="password" name="password" class="form-control" required="required" autocomplete="off">

            <button id="btnSubmit" type="submit" class="btn btn-primary btn-block">Connexion</button>

        </form>


</body>

</html>