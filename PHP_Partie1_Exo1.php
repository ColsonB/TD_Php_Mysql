
<?php

include "Menu.php";
        Menu();

$NombreAléatoire = rand (0, 100);

if ($NombreAléatoire%2 == 1) { 
    echo "<div id=Impaire>$NombreAléatoire</div>"; // Impaire
}
else {
    echo "<div id=Paire>$NombreAléatoire</div>"; // Paire
}

highlight_file(__FILE__);

?>

<html>

<head>
    <title>Exercice 1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='Menu.css'>
</head>

<link rel="stylesheet" type="text/css" href="PHP_Partie1_Exo1.css">

</html>