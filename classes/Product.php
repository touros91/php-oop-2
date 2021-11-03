<?php 
class Product {
    protected $name;
    protected $category;
    protected $price;
    protected $quantity;

    public function __construct($_name, $_category, $_price, $_quantity)
    {
        $this->name = $_name;
        $this->category = $_category;
        $this->price = $_price;
        $this->quantity = $_quantity;
    }
}