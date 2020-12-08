
<?php

include "Menu.php";
        Menu();

$Tableau = array ( 
    "Nom" => "Colson",
    "Prénom" => "Baptiste",
    "MDP" => "0000",
);




echo "<table><tr>";
echo "<td>".$Tableau["Nom"]."</td>";
echo "<td>".$Tableau["Prénom"]."</td>";
echo "<td>".$Tableau["MDP"]."</td>";
echo "</tr></table>";

highlight_file(__FILE__);


?>

<html>

<head>
    <title>Exercice 2.2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='Menu.css'>
</head>

</html>
