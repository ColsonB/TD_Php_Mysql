<?php

include "Menu.php";
        Menu();

?>

<html>

<head>
    <title>Exercice 3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='Menu.css'>
</head>
    <body>
    <form action="Formulaire">
        <fieldset>

        Civilité:
        <label for="title_1">
            <input type="radio" id="title_1" name="title" value="M." >
            Mr
          </label>
        <label for="title_2">
            <input type="radio" id="title_2" name="title" value="Mme.">
            Mme ou Mlle
          </label>
          
          <p>
            <label for="name">
              Nom :
            </label>
            <input type="text" id="name" name="username">
          </p>
          <p>
            <label for="name">
              Prénom : 
            </label>
            <input type="text" id="name" name="username">
          </p>
          <p>
            <label for="date">
              Date de naissance :
            </label>
            <select id="date" name="date">
             <option value="1">1</option> 
             <option value="1">2</option>  
             <option value="1">3</option>
             <option value="1">4</option>
             <option value="1">5</option>
             <option value="1">6</option>
             <option value="1">7</option>
             <option value="1">8</option>
             <option value="1">9</option>
             <option value="1">10</option>
             <option value="1">11</option>
             <option value="1">12</option>
             <option value="1">13</option>
             <option value="1">14</option>
             <option value="1">15</option>
             <option value="1">16</option>
             <option value="1">17</option>
             <option value="1">18</option>        
             <option value="1">19</option>
             <option value="1">20</option>
             <option value="1">21</option>
             <option value="1">22</option>
             <option value="1">23</option>
             <option value="1">24</option>
             <option value="1">25</option>
             <option value="1">26</option>
             <option value="1">27</option>
             <option value="1">28</option>
             <option value="1">29</option>
             <option value="1">30</option>
             <option value="1">31</option>

            </select>
            <select name="month" id="month">
                <option value="2">1</option>
                <option value="2">2</option>
                <option value="2">3</option>
                <option value="2">4</option>
                <option value="2">5</option>
                <option value="2">6</option>
                <option value="2">7</option>
                <option value="2">8</option>
                <option value="2">9</option>
                <option value="2">10</option>
                <option value="2">11</option>
                <option value="2">12</option>

            </select>
            Année:
            <input type="text" id="date" name="year"> 
        </p>
        <p>
            <label for="number">
              Numéro 
            </label>
            <input type="text" id="name" name="username">

            <label for="number">
                Rue 
              </label>
              <input type="text" id="name" name="username">
          </p>

          Adresse:
          <p>
            <label for="number">
                Code postal 
                <input type="text" id="name" name="username">
              </label>

              <label for="number">
                Ville 
                <input type="text" id="name" name="username">
              </label>
          </p>
          <p>
            <label for="number">
                Téléphone:
                <input type="text" id="name" name="username">
              </label>
          </p>

          <p>
            <label for="number">
                E-mail: 
                <input type="text" id="name" name="username">
              </label>
          </p>

          <p> 
              <button type="submit">envoyer</button>
            <button type="submit">reset</button>         
        </p>

    </fieldset>        

    </form>
    </body>
</html>