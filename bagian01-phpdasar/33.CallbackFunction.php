<?php

function satHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Ayunda", "strtoupper");
sayHello("Ayunda", "strtolwer");
sayHello("Ayunda", function (string $name): string {
    return strtoupper($name);
});
sayHello("Ayunda", fn($name) => strtoupper($name));