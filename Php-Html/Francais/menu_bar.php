<header id = "hd" >

        <nav id="navBar">

            <div id="logoName">
                <a class="lico" href="../../index.php">
                    <i class="fas fa-atom"></i>
                </a>
                <a href="../../index.php">
                    <h2>Damien Connetable</h2>
                </a>

            </div>

            <a class = "nav-open" id = "open"><i class="fas fa-bars"></i></a>
		    <a class = "nav-close" id = "close"><i class="fas fa-times"></i></a>

            <ul id="navList">

                <li><a id="Accueil" class="itLink" href="../../index.php">Accueil</a></li>
                <li class="item">
                    <a id="Prose" class="itLink" href="prose.php">Prose</a></li>
                <li class="item">
                    <a id="Projets" class="itLink" href="Projets.php">Projets</a></li>
                <li class="item">
                    <a id="cv" class="itLink" href="cv.php">CV</a></li>
                <li id = "sb" class="item">
                    <a class="itLink item" href="#">Ressources complémentaires <i class="fas fa-chevron-down"></i></a>
                    <ul class = "submenu" >
                    <li><a id="Ressources" class="itLink item" href = "ressources.php">Ressources</a></li>

                    <li><a id = "Exemples d'application" class="itLink item" href="#">Exemples d'application</a></li>

                        <li><a id="Contact"  class="itLink item" href = "contact.php">Contact</a></li>
                        <li><a class="itLink item" href = "#">Liens utiles</a></li>
                        <li><a id="Administration item" class="itLink" href = "administrationHome.php">Administration</a></li>

                    </ul>
                </li>
               
                <li  class="item" id = "mode"><a href="#" ><i id = "modeI" class="far fa-moon itLink"></i></a></li>

                <li id = "french" class="item"><img class="drap"  src = "../../css-images/france.png"></li>
               
  	</div>

            </ul>

            <center>
	
 </center>

        </nav>

    </header>

    <script>

document.getElementById("french").addEventListener('click', (event)=>{
    window.location.replace("../Anglais/EN-index.php");

})

</script>

<script src="../../JavaScript/DarkMode.js"></script>
<script src="../../JavaScript/menuResponsive.js"></script>
<script src="../../JavaScript/goToTop.js"></script>




