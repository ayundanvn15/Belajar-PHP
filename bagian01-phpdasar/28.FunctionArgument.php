<?php

function sayHello($firstname, $lastname = "") {
    echo "Hello $firstname $lastname" . PHP_EOL;
}

sayHello("Ayunda");
sayHello("Yunda");
sayHello("Ayunda", "Yunda");

function sum(int $first, $last) {
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);

function sumALl(...$values) {
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total ". implode(",", $values) . "= $total" . PHP_EOL;
}

$values = [1, 2, 3, 4, 5];

sumALl([1, 2, 3, 4, 5]);
sumALl(...$values);
