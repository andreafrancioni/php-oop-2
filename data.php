<?php

//require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Cucce.php';
require_once __DIR__ . '/Models/Giochi.php';

$products = [
    new Product(
        "Palla con squeak",
        5.99,
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJLx_IarI58TC2gd1KatKHsAgETideratTPg&usqp=CAU",
        new Category("cane", "https://cdn-icons-png.flaticon.com/512/4253/4253264.png")
    ),
];
