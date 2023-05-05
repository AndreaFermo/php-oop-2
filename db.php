<?php
require_once __DIR__ . '/Models/Type.php';

$croquettes = new Type('cibo', $dog, 'crocchette', 3, 5, 'img');
$kennel = new Type('cuccia', $dog, 'confort', 99, 5, 'img');
$laser = new Type('puntatore laser', $cat, 'scimuni gatti', 15, 100, 'img');