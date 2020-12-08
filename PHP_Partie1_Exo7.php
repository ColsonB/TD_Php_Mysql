
<?php   

include "Menu.php";
        Menu();

   session_start();
   if (isset($_POST['Nom'])) {
      echo $_POST['Nom'];
   }

   if (isset($_POST['Prénom'])) {
       echo $_POST['Prénom'];
   }
  

   highlight_file(__FILE__);

?>

<html>

<head>
    <title>Exercice 7</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='Menu.css'>
</head>

<body>

<form method="POST">
    <input type="text" id="name" name="Nom">
    <input type="text" id="name" name="Prénom">
    <input type="submit" id="value" value="Cliquer">
</form>

</body> 

</html>