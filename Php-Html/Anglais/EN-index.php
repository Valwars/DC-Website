<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include 'EN-head.php'; ?>



    <title>Home - DC.</title>
</head>

<?php include 'EN-menu_bar.php'; ?>
<body>

<script>
        document.querySelectorAll('.itLink').forEach(item => {

            if (item.id = "selectedItem") {

                item.id = item.innerHTML;

            }

        })
        var itemSelected = document.getElementById("Home");
        itemSelected.id = "selectedItem";
    </script>

   

    <div id="PresentationDiv">


        <h3>Un pas de plus vers la recherche.</h3>


    </div>

    <section id="Bienvenue">

        <h3>Bienvenue.</h3>
        <p>Je suis Damien Connetable et je travaille principalement dans les simulations à l'échelle atomique (DFT), interstitiels (hydrogène, carbone, azote et oxygène), systèmes métalliques et oxydes, approches multi-échelles, métallurgie, fragilisation par l'hydrogène, Corrosion sous contrainte, diffusion, solubilité.</p>
        <h4>Ce site traite de mes principales activités, en voici quelques exemples :</h4>
        <p>- Charge de recherche CNRS</p>
        <p>- Chercheur - Habilité à diriger des recherches (HDR)</p>
        <p>- Équipe MEMO</p>

        <div id="sourcesImg">

            <a href="# target="_blank">
                <div class="divAcc">
                    <img class="images" id="cirimat" src="../../css-images/cirimat_logo_hd.png">
                    <h3>Cirimat Toulouse</h3>
                </div>
            </a>

            <a href="#" target="_blank">
                <div class="divAcc">
                    <img class="images" id="cnrs" src="../../css-images/logo_cnrs.png">
                    <h3>CNRS</h3>

                </div>
            </a>

        </div>



    </section>

   
   
</body>



</html>