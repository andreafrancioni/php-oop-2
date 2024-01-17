<?php

//require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Cucce.php';
require_once __DIR__ . '/Models/Giochi.php';
require_once __DIR__ . '/Models/Colore.php';
require_once __DIR__ . '/Models/Utente.php';

$visitatore = new Cliente("Andrea", "Andrea1998", "Pincopallino123");

$dog = new Category("Cane", "fas fa-dog");
$cat = new Category("Gatto", "fas fa-cat");

$products = [
    new Giochi(
        "Palla con squeak",
        5.99,
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJLx_IarI58TC2gd1KatKHsAgETideratTPg&usqp=CAU",
        $dog,
        "Rossa"
    ),
    new Cibo(
        "Croccantini per gatti obesi",
        29.99,
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbobacE-V7UY2ohFnyzji_TEE_5ctNODSK0w&usqp=CAU",
        $cat
    ),
    new Cucce(
        "Cuccia morbida da interno",
        18.99,
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFaoM4ZqvZ75CAqmLcxhlPcu7D1loFFJkr7g&usqp=CAU",
        $dog,
        "Verde"
    ),
    new Giochi(
        "Corda da masticare",
        12.99,
        "",
        $dog,
        "Blu"
    ),
    new Giochi(
        "Topolino meccanico",
        15.99,
        "",
        $cat,
        "Grigio"
    ),
];
