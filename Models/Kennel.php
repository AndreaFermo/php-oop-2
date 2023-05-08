<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../Traits/Weightable.php';

class Kennel extends Product {

    use Weightable;
    
    public $model;
    public $material;

        public function __construct(Category $_category, $_name, float $_price, $_rate, $_image, $_model, $_material) {
        parent::__construct($_category, $_name, $_price, $_rate, $_image);
        $this->model = $_model;
        $this->material = $_material;
        $this->title = get_class($this);
    }
    }


 
