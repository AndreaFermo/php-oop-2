<?php
require_once __DIR__ . '/Category.php';

class Product{
    public $name;
    public $price;
    public $rate;
    public $image;
    public $title;
    public $category;

    public function __construct(Category $_category, $_name, float $_price, $_rate, $_image) {
        $this->category = $_category;
        $this->name = $_name;
        $this->price = $_price;
        $this->rate = $_rate;
        $this->image = $_image;
    }  
}



