<?php

//require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Cucce.php';
require_once __DIR__ . '/Models/Giochi.php';

$products = [
    new Giochi(
        "Palla con squeak",
        5.99,
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJLx_IarI58TC2gd1KatKHsAgETideratTPg&usqp=CAU",
        new Category("cane", "https://cdn-icons-png.flaticon.com/128/194/194279.png")
    ),
    new Cibo(
        "Croccantini per gatti obesi",
        29.99,
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbobacE-V7UY2ohFnyzji_TEE_5ctNODSK0w&usqp=CAU",
        new Category("gatto", "https://cdn-icons-png.flaticon.com/128/2324/2324723.png")
    ),
    new Cucce(
        "Cuccia morbida da interno",
        18.99,
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFaoM4ZqvZ75CAqmLcxhlPcu7D1loFFJkr7g&usqp=CAU",
        new Category("cane", "https://cdn-icons-png.flaticon.com/128/194/194279.png")
    )
];
