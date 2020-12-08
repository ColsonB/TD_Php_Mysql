<?php 

include "Formulaire.php";

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' type='text/css' href='Menu.css'>
    </head>
<body>
    
    <h1>Exercice Final Partie 2<h1>
    
    <?php

        $MotDepass = "1234";
        
        if (afficheFormulaire($MotDepass) == "OK"){ 
            ?>
                <a href="http://google.com"> Google </a>
            <?php
        }
    ?>

    </body>
</html>
        