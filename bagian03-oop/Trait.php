<?php

require_once "Data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Ayunda");
$person->hello("Ayunda");

$person->name = "Eko";
var_dump($person);

$person->run();