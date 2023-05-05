<?php
require_once __DIR__ . '/Product.php';

class Type extends Product{
    public $name;
    public $price;
    public $rate;
    public $image;

    public function __construct(Category $_category, $_name, float $_price, $_rate, $_image) {
        parent::__construct($_category);
        $this->name = $_name;
        $this->price = $_price;
        $this->rate = $_rate;
        $this->image = $_image;
    }
}



