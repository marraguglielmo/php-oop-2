<?php
require_once __DIR__ . '/Product.php';

class Toy extends Product
{
    public $material;
    public $size;

    public function __construct(
        int $_id,
        string $_name,
        string $_image,
        string $_description,
        float $_price,
        Category $_category,
        string $_material,
        string $_size
    ) {
        parent::__construct($_id, $_name, $_image, $_description, $_price, $_category);
        $this->material = $_material;
        $this->size = $_size;
    }
}
