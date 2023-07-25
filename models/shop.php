<?php
// Class Product
require_once __DIR__ . '/Product.php';
// Class Category
require_once __DIR__ . '/Category.php';

// Shop class definition
class Shop
{
    public $categories;

    // Construct
    public function __construct()
    { // Initialise the empty category array at the beginning
        $this->categories = array();
    }

    // Method for adding a category to the shop
    public function addCategory($category)
    { // Adds the category to the shop's category array
        $this->categories[] = $category;
    }
}
