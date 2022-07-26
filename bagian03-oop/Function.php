<?php

require_once "Data/Person.php";

$ayunda = new Person("Ayunda", "Bandung");
$ayunda ->name = "Ayunda";
$ayunda->sayHello("nvn");

$nvn = new Person("yunda", "Cirebon");
$nvn ->name = "yunda";
$nvn->sayHello(null);

$ayunda->info();
$nvn->info();
