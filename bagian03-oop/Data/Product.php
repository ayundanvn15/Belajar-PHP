<?php

class Product{
    protected string $name;
    private string $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->name= $price;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getPrice(): int
    {
        return $this->price;
    }
}

class ProductDummy extends Product
{

    public function info()
    {
        echo "Name $this->name" . PHP_EOL;
    }
}
