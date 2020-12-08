
<?php  

include "Menu.php";
        Menu();

if(isset($_POST['nom'])){
    echo $_POST['nom'];
}

highlight_file(__FILE__);

?>

<html>

<head>
    <title>Exercice 5</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='Menu.css'>
</head>

<body>

<form action ="" method="POST">
    <input type="text" name="nom">
    <input type="submit" value="Cliquer">
</form>

</body> 

</html>