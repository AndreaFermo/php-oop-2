<?php
require_once __DIR__ . '/type.php';

class Food extends Type {
    public $model;
    public $weight;

    public function __construct(Category $_category, $_name, float $_price, $_rate, $_image, $_model, $_weight){
        parent::__construct($_category, $_name, $_price, $_rate, $_image);
        $this->model = $_model;
        $this->weight = $_weight;
        $this->title = 'cibo';
    }
}



