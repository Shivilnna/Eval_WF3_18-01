<!-- POUPARDIN PIERRE EMMANUEL -->
<?php
// rectification du dbname qui est exercice_2 dans mon cas.
// Ajout du try / catch pour la connection a la BDD.
try {
    $Db_exo = new PDO("mysql:host=localhost;dbname=exercise_2", "root", "");
} catch (Exception $e) {
    die($e->getMessage());
}