<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../Traits/Weightable.php';

class Food extends Product {

    use Weightable;
   
    public $model;
    public $main_ingredient;

    public function __construct(Category $_category, $_name, $_rate, $_image, $_model, $_main_ingredient) {
        parent::__construct($_category, $_name, $_rate, $_image);
        $this->model = $_model;
        $this->main_ingredient = $_main_ingredient;
        $this->title = get_class($this);
    }
}



