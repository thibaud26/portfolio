<!DOCTYPE html>
<html lang="fr">

    <head>
        <?php include ('head.html'); ?>
        <title>PORTFOLIO Thibaud Bousquainaud</title>
    </head>
    <body>
    
            <header class="header">
            
            <h1 class="titre">Portfolio</h1>
            
                        <nav>
                            <?php include ('menu.html'); ?>
                        </nav>
          
            </header>
        
<aside class="aside-leftCreations">  
    
    <header>
        
        <button onclick="hideAside()" class="boutonCache"><i class="fa fa-arrow-left" aria-hidden="true"></i>
        </button>
    
        <img class="photo" src="images/Thib.png" alt="photo">
            <section class="prenom">
                <h1>Thibaud</h1>
                <h1>Bousquainaud</h1>
            </section>
                    
    </header>
    
<section>


        <h3 class="h3competences">Compétences : </h3>
        <div class = "competences">
            <div class = "licompetences">


        <li>Html5: </li>
        <li>Css3: </li>
        <li>Php: </li>
        <li>Javascript: </li>
        <li>Linux: </li>
        <li>GIT:</li>
        <li>SCRUM: </li>

        </div>

        <div class = "liprogress">

        <progress max="100" value="90" form="form-id">90%</progress>
        <progress max="100" value="90" form="form-id">90%</progress>
        <progress max="100" value="50" form="form-id">50%</progress>
        <progress max="100" value="50" form="form-id">50%</progress>
        <progress max="100" value="70" form="form-id">70%</progress>
        <progress max="100" value="90" form="form-id">90%</progress>
        <progress max="100" value="90" form="form-id">90%</progress>

        </div>

                 </div>

</section>
</aside>

        

<main class="warpper">
    
    <section class="flex-container">
        <div class="flex-item"><a class="hvr-float-shadow" href="../DossierCV/cvthibaud.php"><img class="photoCreation" src="images/ecrancv.png" alt="cv"></a></div>
        <div class="flex-item"><a class="hvr-float-shadow" href="../travailA5/accueil/accueil.php"><img class="photoCreation" src="images/ecransitedev.png" alt="site developont"></a></div>
        <div class="flex-item"><a class="hvr-float-shadow" href="../Table3/www/index.php"><img class="photoCreation" src="images/ecranreseausocial.png" alt="site reseau social"></a></div>
    </section>
    
    <section class="flex-container">
        <div class="flex-item"><a class="hvr-float-shadow" href="../Siteweb/dossierprincipal.php"><img class="photoCreation" src="images/ecransiteperso.png" alt="site perso"></a></div>
        <div class="flex-item"><a class="hvr-float-shadow" href="../moteurrecherchemusiques/index.html"><img class="photoCreation" src="images/photositemusique1.png" alt="site musique"></a></div>
    </section>
    
    
    <!--
    <div class="photohaut"> 
	<section class="sectionWarpper"><a class="hvr-float-shadow"
                   href="../DossierCV/cvthibaud.php">
                   <img class="photocv" src="images/ecrancv.png" alt="cv"/>
    </a></section>

	<section><a class="hvr-float-shadow" href="../travailA5/accueil/accueil.php">
                    <img class="photodev" src="images/ecransitedev.png" alt="site developont"/>
	</a></section>
    </div>

    <div class="photobas">
	<section><a class="hvr-float-shadow"
                   href="../Siteweb/dossierprincipal.php">
                    <img class="photositeperso" src="images/ecransiteperso.png" alt="site perso"/>
	</a></section>

    <section><a class="hvr-float-shadow"
                   href="../Table3/www/index.php">
                    <img class="photoreseau" src="images/ecranreseausocial.png" alt="site reseau social"/>
    </a></section>
    </div>
    
    <div class="photoBas2">
	<section><a class="hvr-float-shadow"
                   href="../moteurrecherchemusiques/index.html">
                    <img class="photositemusique" src="images/photositemusique1.png" alt="site musique"/>
	</a></section>
        
    </div> -->
            
        </main>
        
        <footer>
            <?php include ('footer.php'); ?>
        </footer>
        
    </body>
</html>