<?php

include "Menu.php";
        Menu();

/*fonction qui affiche un formulaire de connexion à une page et qui prend en paramètre un mot de pass
Cette fonction vérifie que le mot de pass saisie dans le formulaire est le même que celui passé en paramètre avec la méthode POST */

    function afficheFormulaire($motDePass){
        $afficheForm = "KO";
        
        if(isset($_POST["mdp"])){
            echo "le mot de passe saisie est :  ".$_POST["mdp"];
            if($motDePass == $_POST["mdp"]){
                echo "Mot de Passe Correct";
                $afficheForm = "OK";
            }else{
                echo "Mot de Passe Incorrect";
            }
        }else{
            echo "veuilllez saisir formulare";
        }

        //j'affiche le formulaire uniquement si le mdp est pas saisie
        if ($afficheForm == "KO"){
            ?>
                <form action="" method="post" >
                <div >
                    <label for="name">Identifiant</label>
                    <input type="text" name="name" id="Zone0" required>
                </div>
                <div >
                    <label for="password">Mot de passe</label>
                    <input type="password" name="mdp" id="zone2" required>
                </div>
                <div >
                    <input type="submit" value="Connecte toi!">
                </div>
                </form>
            <?PHP
        }    

        // je return OK ou KO selon si le user à saisir le mdp attendu en paramètre
        return $afficheForm;

    } 

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='Menu.css'>
</head>

</html>
