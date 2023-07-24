<?php

// Product class definition
class Product
{
    public $id;
    public $name;
    public $description;
    public $price;
    public $category;
    public $photo;

    // Construct
    public function __construct($id, $name, $description, $price, $category, $photo)
    { // Initialise properties with values passed as parameters
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = $category;
        $this->photo = $photo;
    }
}
