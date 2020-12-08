
<?php

include "Menu.php";
        Menu();
   
    $Tableau[5] = 0;
    $i;
    echo "<table><tr>";
    for ($i=0; $i <= 5; $i++) {
        echo "<td>".$i."</td>";
    }
    echo "</tr></table>";
    
    highlight_file(__FILE__);

?>

<html>

<head>
    <title>Exercice 2.1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='Menu.css'>
</head>

</html>