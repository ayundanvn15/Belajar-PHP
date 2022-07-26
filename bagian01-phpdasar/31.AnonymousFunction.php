<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("AYunda");
$sayHello("Novani");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Ayunda", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};

sayGoodBye("Ayunda", $filterFunction);

$firstName = "Ayunda";
$lastName = "Novani";

$sayHello = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloAyunda();

$firstName = "Yunda";
$lastName = "Nvn";
$sayHelloAyunda();
