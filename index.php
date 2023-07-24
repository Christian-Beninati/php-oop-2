<?php

// Class Shop
require_once __DIR__ . '/models/shop.php';



// Categories
$dogCategory = new Category('Dog');
$catCategory = new Category('Cat');
$birdCategory = new Category('Bird');
$fishCategory = new Category('Fish');

// Product
$product1 = new Product(1, 'Acana', 'Acana food is high in protein and nutrients, and it is perfect for dogs of all ages and sizes.', 10.99, $dogCategory);
$product2 = new Product(2, 'Orijen', 'Orijen is a premium cat food brand that is made with fresh, local ingredients.', 8.99, $catCategory);
$product3 = new Product(3, 'Prevue Hendryx', 'Prevue Hendryx aviaries are made of durable, high-quality materials', 105.49, $birdCategory);
$product4 = new Product(4, 'Fluval', 'The Fluval filter is made with premium materials to keep your aquarium water clean and healthy.', 42.49, $fishCategory);

// Adding products to their respective categories
$dogCategory->addProduct($product1);
$catCategory->addProduct($product2);
$birdCategory->addProduct($product3);
$fishCategory->addProduct($product4);

// Shop
$shop = new Shop();
$shop->addCategory($dogCategory);
$shop->addCategory($catCategory);
$shop->addCategory($birdCategory);
$shop->addCategory($fishCategory);
?>


<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolshop</title>
</head>

<body>
    <h1>Boolshop</h1>

    <?php
    // Visualizzazione dello shop
    foreach ($shop->categories as $category) :
    ?>
        <h2>Category: <?= $category->name ?></h2>
        <ul>
            <?php foreach ($category->products as $product) : ?>
                <li>
                    <strong>Product:</strong> <?= $product->name ?><br>
                    <strong>Description:</strong> <?= $product->description ?><br>
                    <strong>Price:</strong> £<?= $product->price ?><br>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php
    endforeach;
    ?>
</body>

</html>