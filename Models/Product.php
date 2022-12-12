<?php

class Product{
    public $id;
    public $name;
    public $brand;
    public $category;
    public $price;
    public $is_available;
    public $image;

    public function __construct($id, $name, $brand, $category, $price, $is_available, $image)
    {
        $this -> id = $_id;
        $this -> name = $_name;
        $this -> brand = $_brand;
        $this -> category = $_category;
        $this -> price = $_price;
        $this -> is_available = $_is_available;
        $this -> image = $_image;
    }
}
?>