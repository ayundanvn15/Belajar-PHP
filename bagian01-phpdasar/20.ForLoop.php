<?php

$counter = 1;

for ($counter = 1 ; $counter <= 10 ; $counter++){
    echo "Ini adalah for loop ke-$counter . PHP_EOL";
}

for ($counter = 1 ; $counter <= 10 ; $counter--){
    echo "Ini adalah for loop ke-$counter . PHP_EOL";
}

for ($counter = 1 ; $counter <= 10 ; $counter++) :
    echo "Ini adalah for loop ke-$counter . PHP_EOL";
endfor;

for ($counter = 1 ; $counter <= 10 ; $counter--) :
    echo "Ini adalah for loop ke-$counter . PHP_EOL";
endfor;
