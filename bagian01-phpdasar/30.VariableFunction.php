<?php

function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$functionYangAkanDipanggil = "f00";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "bar";
$functionYangAkanDipanggil();

function sayHello (string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" > PHP_EOL;
}

function sampleFunction(string $name): string {
    return "Sample $name";
}

sayHello("Ayunda", "sampleFunction");
sayHello("Ayunda", "strtoupper");
sayHello("Ayunda", "strtolower");