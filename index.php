<?php

// Class Shop
require_once __DIR__ . '/models/shop.php';

// Categories
$dogCategory = new Category('Dog');
$catCategory = new Category('Cat');
$birdCategory = new Category('Bird');
$fishCategory = new Category('Fish');

// Product_data
include __DIR__ . '/data/product_data.php';

// Adding products to their respective categories
foreach ($dogProducts as $product) {
    $dogCategory->addProduct($product);
}

foreach ($catProducts as $product) {
    $catCategory->addProduct($product);
}

foreach ($birdProducts as $product) {
    $birdCategory->addProduct($product);
}

foreach ($fishProducts as $product) {
    $fishCategory->addProduct($product);
}

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

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="my-5 text-center display-1">Boolshop</h1>

        <?php foreach ($shop->categories as $category) : ?>
            <h4 class="mt-4">Category: <?= $category->name ?></h2>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php foreach ($category->products as $product) : ?>
                        <div class="col">
                            <div class="card mb-3">
                                <img src="<?= $product->photo ?>" class="card-img-top" alt="<?= $product->name ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $product->name ?></h5>
                                    <p class="card-text"><?= $product->description ?></p>
                                    <p class="card-text">Price: £<?= $product->price ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
    </div>
</body>

</html>