<?php

function validate(string $value)
{
    if (trim($value) == ""){
        throw new Exception("Invailid string");
    }
}

try {
    validate("  ");
}catch (Exception $exception){
    echo "Invaild" . PHP_EOL;
}