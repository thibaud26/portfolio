<!DOCTYPE html>
<html lang="fr">

    <head>
        <?php include ('head.html'); ?>
        <title>PORTFOLIO Thibaud Bousquainaud</title>
    </head>
    <body>
    
            <header class="header">
            
            <h1 class="titre">PORTFOLIO</h1>
            
                        <nav>
                            <?php include ('menu.html'); ?>
                        </nav>
          
            </header>
        
<aside class="aside-leftCreations">  
    
    <header>
    
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
            
    <div class="photohaut"> 
	<section><p><a class="hvr-float-shadow"
                   href="../DossierCV/cvthibaud.php">
                   <img class="photocv" src="images/ecrancv.png" alt="cv"/>
    </a></p></section>

	<section><p><a class="hvr-float-shadow"
                   href="../travailA5/accueil/accueil.php">
                    <img class="photodev" src="images/ecransitedev.png" alt="site developont"/>
	</a></p></section>
    </div>

    <div class="photobas">
	<section><p><a class="hvr-float-shadow"
                   href="../Siteweb/dossierprincipal.php">
                    <img class="photositeperso" src="images/ecransiteperso.png" alt="site perso"/>
	</a></p></section>

    <section><p><a class="hvr-float-shadow"
                   href="../Table3/www/index.php">
                    <img class="photoreseau" src="images/ecranreseausocial.png" alt="site reseau social"/>
    </a></p></section>
    </div>
            
        </main>
        
        <footer>
            <?php include ('footer.php'); ?>
        </footer>
        
    </body>
</html>