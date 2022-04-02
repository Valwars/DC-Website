<header id = "hd" >

        <nav id="navBar">

            <div id="logoName">
                <a class="lico" href="EN-index.php">
                    <i class="fas fa-atom"></i>
                </a>
                <a href="EN-index.php">
                    <h2>Damien Connetable</h2>
                </a>

            </div>

            <a class = "nav-open" id = "open"><i class="fas fa-bars"></i></a>
		    <a class = "nav-close" id = "close"><i class="fas fa-times"></i></a>

            <ul id="navList">

                <li><a id="Home" class="itLink" href="EN-index.php">Home</a></li>
                <li class="item">
                    <a id="Prose" class="itLink" href="EN-prose.php">Prose</a></li>
                <li class="item">
                    <a id="Projects" class="itLink" href="EN-Projets.php">Projects</a></li>
                <li class="item">
                    <a id="cv" class="itLink" href="EN-cv.php">CV</a></li>
                <li id = "sb" class="item">
                    <a class="itLink item" href="#">Additional resources <i class="fas fa-chevron-down"></i></a>
                    <ul class = "submenu" >
                    <li><a id="Resources" class="itLink item" href = "EN-ressources.php">Resources</a></li>

                    <li><a id = "Application examples" class="itLink item" href="#">Application examples</a></li>

                        <li><a id="Contact"  class="itLink item" href = "EN-contact.php">Contact</a></li>
                        <li><a class="itLink item" href = "#">Useful links</a></li>
                        <li><a id="Administration" class="itLink item" href = "EN-administrationHome.php">Administration</a></li>

                    </ul>
                </li>
               
                <li  class="item" id = "mode"><a href="#" ><i id = "modeI" class="far fa-moon itLink"></i></a></li>

                <li id = "anglais" class="item"><img class="drap"  src = "../../css-images/united-kingdom.png"></li>
               
  	</div>

            </ul>

            <center>
	
 </center>

        </nav>

    </header>

    <script>

        document.getElementById("anglais").addEventListener('click', (event)=>{
            window.location.replace("../../index.php");

        })

    </script>


<script src="../../JavaScript/DarkMode.js"></script>
<script src="../../JavaScript/menuResponsive.js"></script>
<script src="../../JavaScript/goToTop.js"></script>


<?php 
    // code
?>

