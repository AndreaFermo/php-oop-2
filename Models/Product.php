<?php
require_once __DIR__ . 'Category.php';
require_once __DIR__ . 'Type.php';

class Product extends Category{
    public $name;
    public $image;
    public $price;
    public $type;

    public function __construct($_name, $_image, $_price, $_pet, $_icon, Type $_type){
        parent::__construct($_pet, $_icon);
        $this->pet = $_pet;
        $this->icon = $_icon;
        $this->type = $_type;
    }
}