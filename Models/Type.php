<?php

class Type{
    public $tipology;
    public $description;

    public function __construct($_tipology, $_description) {
        $this->tipology= $_tipology;
        $this->description= $_description;
      
    }
}

$food = new Type('cibo', 'prodotto ad uso alimentare');
$toy = new Type('gioco', 'prodotto per svago e divertimento');
$bed = new Type('cuccia', 'prodotto per la comodità');