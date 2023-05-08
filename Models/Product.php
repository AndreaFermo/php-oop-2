<?php
require_once __DIR__ . '/Category.php';


class Product{
    public $name;
    public $price;
    public $rate;
    public $image;
    public $title;
    public $category;

    public function __construct(Category $_category, $_name, $_rate, $_image) {
        $this->category = $_category;
        $this->name = $_name;
        $this->rate = $_rate;
        $this->image = $_image;
    }  

    public function setPrice($_price) {


        if (is_numeric($_price)) {
            $this->price = $_price;
        } else {
            throw new Exception('Il valore passato non è valido devi usare un numero!');
        }
    }
}



