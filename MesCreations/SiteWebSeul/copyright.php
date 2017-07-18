<p class="copyright">COPYRIGHT © 2017 BOUSQUAINAUD THIBAUD, TOUS DROITS RÉSERVÉS
</p>
<p class="phpheure">
    Nous sommes le: 

    <?php 
    date_default_timezone_set('EUROPE/PARIS');
        echo '&nbsp;' ; echo date('d/m/Y') 
    ?> <br>
    il est 
    <?php 
        echo '&nbsp;' ;  echo date('H:i:s') ; 
    ?> 
</p>


<?php 
    $compteur=fopen(compteur.txt, "r");
    $ab=(fgets($compteur));
    $compte=$ab+1;
    fclose($compteur);
    $compteur=fopen(compteur.txt, "w+");
    fwrite($compteur, $compte);
    fclose($compteur);
?>
<p class="phpcompteur">
      vous etes le : <?php echo($ab); ?> visiteurs. </p>
    <?php fclose($compteur);
    
?> 