<?php
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Kennel.php';
require_once __DIR__ . '/Models/Toy.php';

$croquettes = new Food($dog, 'crocchette', 3.99, 2, 'image/croquettes.jpg', 'Ultima', 'pollo');
$croquettes->setWeight(5, 'kg');

$kennel = new Kennel($dog, 'cuccetta', 89.99, 5, 'image/kennel.jpg', 'comfort', 'legno');
$kennel->setWeight(15, 'kg');

$laser = new Toy($cat, 'laser', 15.99, 4, 'image/laser.jpg', 'scimuni gatti', false);
$laser->setWeight(100, 'g');