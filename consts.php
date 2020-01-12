<?php

define('UNDEFINED_ANIMAL', 0);
define('CHICKEN', 1);
define('COW', 2);

$animal_params = [
    COW=>['min_profit'=>8,'max_profit'=>12,'profit_type'=>'milk'],
    CHICKEN=>['min_profit'=>0,'max_profit'=>1,'profit_type'=>'eggs']    
    ];

function is_animal_type_correct(int $type) {
    global $animal_params;
    
    return (isset($animal_params)) ? true : false;
    
}

function print_it($data) {
    
    echo '<pre>';
    print_r($data);
    print_r('</pre>');
    
}


