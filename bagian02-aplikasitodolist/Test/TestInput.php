<?php

require_once "../Helper/Input.php";

$name = input("Name");
echo "Hello $name";

$channel = input("Channel");
echo $channel . PHP_EOL;