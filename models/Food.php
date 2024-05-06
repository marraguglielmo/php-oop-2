<?php
require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public $weight;
    public $ingredients;

    public function __construct(
        int $_id,
        string $_name,
        string $_image,
        string $_description,
        float $_price,
        Category $_category,
        int $_weight,
        array $_ingredients
    ) {
        parent::__construct($_id, $_name, $_image, $_description, $_price, $_category);
        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
    }
}
