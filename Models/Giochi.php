<?php

require_once __DIR__ . '/Product.php';

class Giochi extends Product
{
    use Colore;

    public function __construct($title, $price, $image, Category $category, $colore)
    {
        parent::__construct($title, $price, $image, $category);
        $this->colore = $colore;
    }
}
