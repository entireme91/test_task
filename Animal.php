<?php

namespace Animal;

require_once('consts.php');

class Animal {

    protected $id;
    protected $type;
    protected $min_profit;
    protected $max_profit;
    protected $profit_type;
    
    public function __construct() {
        
    }

    public function gather_profit() {
        
        $gathered = rand($this->min_profit, $this->max_profit);
        echo get_class().':'.__FUNCTION__.":animal [$this->id] has produced [$gathered] of [$this->profit_type] <br>";
        return $gathered;
        
    }

}
