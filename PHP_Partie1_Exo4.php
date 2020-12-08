
<?php

include "Menu.php";
        Menu();

$A = 8;
$B = 36;
$C = -42;
$Delta;

$Delta= $B*$B-(4*$A*$C);

if ($Delta > 0) {

    echo "L'équation a 2 solution réelles";
    echo (-$B - sqrt ($Delta) / 2*$A);
    echo (-$B + sqrt ($Delta) / 2*$A);
}

if ($Delta == 0) {

    echo "L'équation a une solution réelles".-$B / 2*$A;
    
}

if ($Delta < 0 ) {

    echo "L'équation n'a pas de solutions réelles";
}

highlight_file(__FILE__);

?>

<html>

<head>
    <title>Exercice 4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='Menu.css'>
</head>

</html>