<?php
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Kennel.php';
require_once __DIR__ . '/Models/Toy.php';

$croquettes = new Food($dog, 'crocchette', 2, 'image/croquettes.jpg', 'Ultima', 'pollo');
$croquettes->setWeight(5, 'kg');
try {
    $croquettes->setPrice('prova errore');
} catch (Exception $e) {
    echo "Si è verificato un errore: " . $e->getMessage();
}

$kennel = new Kennel($dog, 'cuccetta', 5, 'image/kennel.jpg', 'comfort', 'legno');
$kennel->setWeight(15, 'kg');
try {
    $kennel->setPrice(119.99);
} catch (Exception $e) {
    echo "Si è verificato un errore: " . $e->getMessage();
}

$laser = new Toy($cat, 'laser', 4, 'image/laser.jpg', 'scimuni gatti', false);
$laser->setWeight(100, 'g');
try {
    $laser->setPrice(14.99);
} catch (Exception $e) {
    echo "Si è verificato un errore: " . $e->getMessage();
}

