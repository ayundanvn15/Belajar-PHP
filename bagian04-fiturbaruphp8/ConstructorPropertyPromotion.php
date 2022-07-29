<?php

class Product
{

    public function __construct(public string $id,
                                public string $name,
                                public int $price = 0,
                                public int $quality = 0,
                                private bool $expensive = false)
    {
    }

}

$product = new Product(id: "1", name: "Mie Ayam", price: 12000);
var_dump($product);

echo $product->name . PHP_EOL;

