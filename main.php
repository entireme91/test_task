<?php

require_once('Farm.php');

global $animal_params;

echo "animal params from consts.php:";

print_it($animal_params);

$cows = 10;

$chickens = 20;

$farm = new Farm($cows,$chickens);

$farm->gather_all();
$farm->gather_all();

