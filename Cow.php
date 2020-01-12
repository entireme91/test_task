<?php

require_once('consts.php');
require_once('Animal.php');

use Animal\Animal;

class Cow extends Animal {

    public function __construct($id) {
        global $animal_params;
        
        $this->id = $id;
        $this->type = COW;
        
        $params = $animal_params[$this->type];
        
        $this->min_profit = $params['min_profit'];
        $this->max_profit = $params['max_profit'];
        $this->profit_type = $params['profit_type'];
        
        echo get_class().':'.__FUNCTION__ . ":animal id [$this->id] type [$this->type] with min profit [$this->min_profit], max profit [$this->max_profit] was succesfully created <br>";
        
    }
    
    public function gather_profit() {
        
            return parent::gather_profit();
        
    }

}