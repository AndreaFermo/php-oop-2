<?php 

class Category {
    public $pet;
    public $icon;

    public function __construct($_pet, $_icon) {
        $this->pet= $_pet;
        $this->icon= $_icon;
    }
}

$dog = new Category('cane', 'fa-solid fa-shield-dog');
$cat = new Category('gatto', 'fa-solid fa-shield-cat');
