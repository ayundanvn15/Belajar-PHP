<?php

$names = ["Ayunda", "Novani", "Nvn"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP.EOL;
}

foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}

$person = [
    "first_name" => "Ayunda",
    "middle_name" => "Novani",
    "last_name" => "Nvn"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;

}
