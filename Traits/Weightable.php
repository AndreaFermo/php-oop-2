<?php

trait Weightable {
    public $weight;
    public $unit_of_measure;

    public function setWeight(float $_weight, string $_unit_of_measure) {
        $this->weight = $_weight;
        $this->unit_of_measure = $_unit_of_measure;
    }
}