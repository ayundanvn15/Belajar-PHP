<?php

function sayHello(string $first, string $middle = "", string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

sayHello("Ayunda", "Novani", "Nvn");
// sayHello("Ayunda", "Novani"); // error

sayHello(last: "Nvn", first: "Ayunda", middle: "Novani");
sayHello(first: "Ayunda", last: "Nvn");