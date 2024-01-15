<?php

require_once __DIR__ . '/Category.php';

class Product
{
    public $title;
    public $price;
    public $image;
    public $category;

    public function __construct($title, $price, $image, Category $category)
    {
        $this->title = $title;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }
}
