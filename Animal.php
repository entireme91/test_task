<?php

require_once('consts.php');

class Animal {
    
    private $type;
    private $profit;
    
    public function __construct(int $type) {
        
        $this->type = $type;
        $this->type = 0;
        
        switch ($type) {
            
            case COW: {
                
                $this->profit = rand($animal_params[$type]['min_profit'],$animal_params[$type]['max_profit']);
                
                break;
            }
            
            case chicken: {
                
                $this->profit = rand($animal_params[$type]['min_profit'],$animal_params[$type]['max_profit']);
                
                break;
            }
            
            default : { echo __FUNCTION__.":unknown animal type [$type] (this should  never happen, always check animal type before object creation) <br>"; }
            
        }
        
        echo __FUNCTION__.":animal type [$type] with profit [$profit] was succesfully created <br>";
        
    }
    
    public function gather_profit() { 
        
        return $this->profit;
        
    }
    
    
}
