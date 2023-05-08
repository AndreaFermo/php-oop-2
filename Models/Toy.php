<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../Traits/Weightable.php';

class Toy extends Product {

    use Weightable;
    
    public $model;
    public $edible;

    public function __construct(Category $_category, $_name, $_rate, $_image, $_model, bool $_edible) {
        parent::__construct($_category, $_name, $_rate, $_image);
        $this->model = $_model;
        $this->edible = $_edible;
        $this->title = get_class($this);
    }
}

