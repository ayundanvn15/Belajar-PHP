<?php

require_once "Data/Manager.php";

$manager = new Manager();
$manager->name = "Ayunda";
$manager->sayHello("Novani");

$vp = new VicePresident();
$vp->name = "Ayunda";
$vp->sayHello("Novani");