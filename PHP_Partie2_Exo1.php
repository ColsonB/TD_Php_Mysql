<?php

include "Menu.php";
Menu();

Function Tableau () {

 echo "<table border><td>Bonjour</td></table>";

}

highlight_file(__FILE__);

?>

<html>

<head>
    <title>Exercice 1 Partie 2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='Menu.css'>
</head>

<body>

<div class="hautdepage">
    <?php Tableau (); ?>
</div>

<div class="basdepage">
    <?php Tableau (); ?>
</div>

</body>

</html>