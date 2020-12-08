
<?php

include "Menu.php";
        Menu();

if(isset($_GET['Nom'])){
    echo "Votre nom est : " .$_GET['Nom'];
}

highlight_file(__FILE__);

?>

<html>

<head>
    <title>Exercice 6</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='Menu.css'>
</head>

<body>

<form method="GET">
    <input type="text" id="name" name="Nom">
    <input type="submit" value="Cliquer">
</form>

</body>

</html>