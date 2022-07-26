<?php

require_once "Data/Person.php";

$person = new Person("Ayunda", "Bandung");
$person -> name = "Ayunda";
$person -> address = "Bandung";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("yunda", null);
$person2 -> name = "Yunda";
$person2 -> address = "Garut";

var_dump($person2);