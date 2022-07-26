<?php

require_once "Data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Ayunda");
var_dump($company);

$company->programmer = new BackendProgrammer("Ayunda");
var_dump($company);

$company->programmer = new FrontendProgrammer("Ayunda");
var_dump($company);

sayHellloProgrammer(new Programmer("Ayunda"));
sayHellloProgrammer(new BackendProgrammer("Ayunda"));
sayHellloProgrammer(new FrontendProgrammer("Ayunda"));