<!DOCTYPE html>
<html lang="fr">

    <head>
        <?php include ('head.html'); ?>
        <title>PORTFOLIO Thibaud Bousquainaud</title>
    </head>
    <body>
    
            <header class="header">
                
                <nav>
                            <?php include ('menu.html'); ?>
                        </nav>
            
            <h1 class="prenomAPropos">Thibaud Bousquainaud</h1>

            </header>
        
    
    <div class="aPropos">
    
        <section class="textAPropos">
    
            <p class="devAPropos">Développeur Web et mobile Junior</p>
            <p>"Ayant effectué une formation Développeur Web/mobile avec Dévelo'Pont,
                une filiaire Simplon, Grande école du numérique"</p>
    
        </section>
            
    </div>

        <section class="textAPropos">
        
        <p>"Durant ces 6 mois de formation, j'ai acquis les languages de base tel que HTML5 et CSS3.</p>
        <p>J'ai pu aussi pratiquer d'autres languagues Front-end mais aussi Back-end."</p>
        <p>Pour les entreprises intéressées, je suis à la recherche d'un stage pour terminer la formation du 7 novembre au 5 décembre.</p>
        </section>
       
   						
<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Your name:<br>
    <input name="name" type="text" value="" size="30"/><br>
    Your email:<br>
    <input name="email" type="text" value="" size="30"/><br>
    Your message:<br>
    <textarea name="message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="Send email"/>
    </form>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		mail("tib26@hotmail.fr", $subject, $message, $from);
		echo "Email sent!";
	    }
    }  
?>
						

					
        <footer>
            <?php include ('footer.php'); ?>
        </footer>
        
    </body>
</html>
















<!--<!DOCTYPE html>
<html lang="fr">

    <head>
        <php include ('head.html'); ?>
        <title>PORTFOLIO Thibaud Bousquainaud</title>
    </head>
    <body>
    
            <header class="header">
            
            <h1 class="prenomAPropos">Thibaud Bousquainaud</h1>
            
                        <nav>
                            <php include ('menu.html'); ?>
                        </nav>
          
            </header>
        


        

<main class="warpper">
    
    <div class="aPropos">
    
        <section class="textAPropos">
    
            <p class="devAPropos">Développeur Web et mobile Junior</p>
            <p>"Ayant effectué une formation Développeur Web/mobile avec Dévelo'Pont,
                une filiaire Simplon, Grande école du numérique"</p>
    
        </section>
            
        <section>
    
 
<!--<img class="photoAPropos" src="images/Thib2.png" alt="photo">-->
        
   <!--     </section>
        
        <section class="textAPropos">
        
        <p>"Durant ces 6 mois de formation, j'ai acquis les languages de base tel que HTML5 et CSS3.</p>
        <p>J'ai pu aussi pratiquer d'autres languagues Front-end mais aussi Back-end."</p>
        <p>Pour les entreprises intéressées, je suis à la recherche d'un stage pour terminer la formation du 7 novembre au 5 décembre.</p>
        
        </section>
        
    </div>
            
</main>
        
        <footer>
          <php include ('footer.php'); ?>
        </footer>
        
    </body>
</html>