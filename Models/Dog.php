<?php
require_once __DIR__ . '/Category.php';

class Dog extends Category {
    public $price;
    public $animal;

    public function __construct($_name, $_type, $_description, $_image, $_price, $_animal)
    {
        parent::__construct($_name, $_type, $_description, $_image);

        $this->price = $_price;
        $this->animal = $_animal;
    }
}
?>