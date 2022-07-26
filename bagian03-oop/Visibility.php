<?php

require_once "Data/Product.php";

$product = new Product("Aple", 20000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;
