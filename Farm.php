<?php

require_once('consts.php');

class Farm {

    private $animals;
    private $total_animals;
    
    public function __construct(int $chickens_to_add, int $cows_to_add) {
        
        $this->total_animals = 0;
        $this->animals = array();

        for ($i = 1; $i <= $chickens_to_add; $i++)
            $this->add_animal(CHICKEN);

        for ($j = 1; $j <= $cows_to_add; $j++)
            $this->add_animal(CHICKEN);
        
        $this->total_animals = count($this->animals);
        
        echo __FUNCTION__.":total animals added [$this->total_animals] <br>";
        
    }

    public function add_animal(int $type) {

        if (!is_animal_type_correct($type)) {
            return false;
        }

        switch ($type) {

            case COW: {
                    $this->animals[] = new Animal($type);
                    break;
                }

            case CHICKEN: {
                    $this->animals[] = new Animal($type);
                    break;
                }

            default: {
                    echo __FUNCTION__ . ":animal type [$type] check failed, watch for consts <br>";
                    return false;
                }
        }
        
        echo __FUNCTION__ . ":animal type [$type] succesfully added <br>";
        return true;
        
    }

}
