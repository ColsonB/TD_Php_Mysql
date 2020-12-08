<?php 

include "Menu.php";
        Menu();

    session_start();

    if (isset($_GET['login']) == "Baptiste" && isset($_GET['motdepasse']) == 1234) {
    echo "Bienvenue";
    }

    else {
    echo "Login ou Mot de passe incorrect";
    }
   
    highlight_file(__FILE__);

    ?>


<html>

<head>
    <title>Exercice Final</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='Menu.css'>
</head>

<body>

    <form method="GET">
    
        <label for="login">Login</label>
        <input type="text" id="name" name="login" >
        <label for="motdepasse">Mot de Passe</label>
        <input type="text" id="name" name="motdepasse" >
        <input type="submit" id="value" value="Cliquer">

</body>

</html>