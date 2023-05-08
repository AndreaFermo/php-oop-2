<?php
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Kennel.php';
require_once __DIR__ . '/Models/Toy.php';

$croquettes = new Food($dog, 'crocchette', 2, 'image/croquettes.jpg', 'Ultima', 'pollo');
$croquettes->setWeight(5, 'kg');
$croquettes->setPrice(3.99);

$kennel = new Kennel($dog, 'cuccetta', 5, 'image/kennel.jpg', 'comfort', 'legno');
$kennel->setWeight(15, 'kg');
$kennel->setPrice(119.99);

$laser = new Toy($cat, 'laser', 4, 'image/laser.jpg', 'scimuni gatti', false);
$laser->setWeight(100, 'g');
$laser->setPrice(14.99);

try {
    $croquettes->setPrice('ciao');
} catch (Exception $e) {
    echo "Si è verificato un errore: " . $e->getMessage();
}