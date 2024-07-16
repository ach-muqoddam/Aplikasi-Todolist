<?php 

require_once "./Helper/Input.php";

$name = input("Name");
echo "Hello $name" . PHP_EOL;
$umur = input("umur");
echo "$umur tahun" . PHP_EOL;