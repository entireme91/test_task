<?php

define('CHICKEN', 1);
define('COW', 2);

$animal_params = [
    CHICKEN=>['min_profit'=>0,'max_profix'=>1],
    COW=>['min_profit'=>8,'max_profix'=>12]
    ];


function is_animal_type_correct(int $type) {
    global $animal_params;
    
    return (isset($animal_params)) ? true : false;
    
}