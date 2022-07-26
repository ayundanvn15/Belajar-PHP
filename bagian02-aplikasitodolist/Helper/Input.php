<?php

function input(string $info): string
{
    echo "$info : ";
    $result = fgets(SIDIN);
    return trim($result);
}
