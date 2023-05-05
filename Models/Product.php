<?php
require_once __DIR__ . '/Category.php';

class Product{
    public $title;
    public $category;

    public function __construct(Category $_category) {
        $this->category = $_category;
    }  
}



