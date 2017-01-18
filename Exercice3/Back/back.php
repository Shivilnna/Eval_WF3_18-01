<?php
// DBNAME EXERCICE3 et TABLE CAR crée au préalable avant avec un ID en AutoIncrement.

try {
    $instance = new PDO("mysql:host=localhost;dbname=exercice3", "root", "", array(
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ));
} catch (Exception $e) {
    die($e->getMessage());
}

$credentials = array(
    "mark" => $_POST['mark'],
    "model" => $_POST['model'],
    "year" => $_POST['year'],
    "color" => $_POST['color'],
);

$add = $instance->prepare("INSERT INTO car (mark, model, year, color) VALUES (:mark, :model, :year, :color)");
$add->execute(array(
    'mark' => $credentials['mark'],
    'model' => $credentials['model'],
    'year' => $credentials['year'],
    'color' => $credentials['color'],
));
header('Content-Type: application/json');
echo json_encode(array("success" => true));