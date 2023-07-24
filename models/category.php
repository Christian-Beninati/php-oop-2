<?php

// Category class definition

class Category
{
    public $name;
    public $products;

    // Construct
    public function __construct($name)
    {
        // Initialise the name property with the value passed as parameter
        $this->name = $name;
        // Initialise the empty product array at the beginning
        $this->products = array();
    }

    // Method for adding a product to the category
    public function addProduct($product)
    {  // Adds the product to the product array of the category
        $this->products[] = $product;
    }
}
