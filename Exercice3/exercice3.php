<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 18/01/2017
 * Time: 14:33
 */
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="master.js" charset="utf-8"></script>
    <title>Exercice3</title>
  </head>
  <body>
  <p>Ajouter une voiture</p>
  <form method="post" id="addCar">
      <input id="mark" type="text" name="mark" value="" required placeholder="Marque">
      <input id="model" type="text" name="model" value="" required placeholder="Modele">
      <input id="year" type="text" name="year" value="" required placeholder="Année">
      <input id="color" type="text" name="color" value="" required placeholder="Couleur">
      <button type="submit">Ajouter la voiture</button>
  </form>
  </body>
</html>
