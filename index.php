<?php
require __DIR__ . '/data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoolean</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center">Zoolean</h1>
        </div>
        <div class="row">
            <h2><?= (isset($visitatore->registrato)) ? "Benvenuto " . $visitatore->username : "Benvenuto Ospite" ?></h2>
            <?php foreach ($products as $product) : ?>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $product->title ?>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <?= $product->price ?> €
                            </h6>
                            <p class="card-category"><?= get_class($product) ?></p>
                            <span><?= $product->category->name ?></span>
                            <i class="card-category-icon <?= $product->category->icon ?>"></i>
                            <p class="card-product-color"><?= (isset($product->colore)) ? "Colore: " . $product->colore : "" ?></p>
                            <img class="card-img" src="<?= $product->image ?>">
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>