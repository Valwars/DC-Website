<!DOCTYPE html>
<html lang="en">

<!-- Page d'accueil du site -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css-images/style.css">
    <script src="https://kit.fontawesome.com/5a0ca8ba8d.js" crossorigin="anonymous"></script>
    <link rel="icon" href="css-images/atom.png">



    <title>Accueil - DC.</title>
</head>

<!-- Menu bar -->
<header>
        <nav id="navBar">

            <div id="logoName">
                <a class="lico" href="#">
                    <i class="fas fa-atom"></i>
                </a>
                <a href="#">
                    <h2>Damien Connetable</h2>
                </a>

            </div>

            <a class="nav-open" id="open"><i class="fas fa-bars"></i></a>
            <a class="nav-close" id="close"><i class="fas fa-times"></i></a>

            <ul id="navList">

                <li><a id="selectedItem" class="itLink" href="#">Accueil</a></li>
                <li class="item">
                <a id="Prose" class="itLink" href="Php-Html/Francais/prose.php">Prose</a></li>
                </li>
                <li class="item">
                    <a class="itLink" href="Php-Html/Francais/Projets.php">Projets</a>
                </li>
                <li class="item">
                    <a class="itLink" href="Php-Html/Francais/cv.php">CV</a>
                </li>
                <li id="sb" class="item">
                    <a class="itLink" href="#">Ressources complémentaires <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                    <li><a id="Ressources" class="itLink" href="Php-Html/Francais/ressources.php">Ressources</a></li>

                        <li><a class="itLink" href="#">Exemples d'application</a></li>

                        <li><a class="itLink" href="Php-Html/Francais/contact.php">Contact</a></li>
                        <li><a class="itLink" href="#">Liens utiles</a></li>
                        <li><a class="itLink" id = "Administration" href="Php-Html/Francais/administrationHome.php">Administration</a></li>

                    </ul>
                </li>
                <li class="item" id="mode"><a href="#" class="itLink"><i id="modeI" class="far fa-moon itLink"></i></a></li>
                <li id = "french" class="item"><img class="drap"  src = "css-images/france.png"></li>
                
            </ul>

        </nav>

    </header>
<body>

   

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

            <a href="#" target="_blank">
                <div class="divAcc">
                    <img class="images" id="cirimat" src="css-images/cirimat_logo_hd.png">
                    <h3>Cirimat Toulouse</h3>
                </div>
            </a>

            <a href="#" target="_blank">
                <div class="divAcc">
                    <img class="images" id="cnrs" src="css-images/logo_cnrs.png">
                    <h3>CNRS</h3>

                </div>
            </a>

        </div>



    </section>

    <script>

document.getElementById("french").addEventListener('click', (event)=>{
    window.location.replace("Php-Html/Anglais/EN-index.php");

})

</script>
   
    <script src="JavaScript/DarkMode.js"></script>
    <script src="JavaScript/menuResponsive.js"></script>

</body>



</html>

<?php
    // code
?>