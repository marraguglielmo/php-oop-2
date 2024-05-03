<?php

class Product
{
    public $id;
    public $name;
    public $image;
    public $description;
    public $price;
    public $category;

    public function __construct(int $_id, string $_name, string $_image, string $_description, float $_price, string $_category)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->image = $_image;
        $this->description = $_description;
        $this->price = $_price;
        $this->category = $_category;
    }
}
