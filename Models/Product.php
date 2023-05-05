<?php
require_once __DIR__ . '/Category.php';

class Product{
    public $title;
    public $category;

    public function __construct($_title, Category $_category) {
        $this->title = $_title;
        $this->category = $_category;
    }  
}



