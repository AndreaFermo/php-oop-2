<?php 

class Category {
    public $pet;
    public $icon;

    public function __construct($_pet, $_icon) {
        $this->pet= $_pet;
        $this->icon= $_icon;
    }
}