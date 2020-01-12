<?php

require_once('consts.php');
require_once('Animal.php');
require_once('Chicken.php');
require_once('Cow.php');

use \Animal\Animal;

class Farm {

    private $next_id;
    private $animals;
    private $total_animals;
    private $last_gather_profit;
    private $total_profit;

    public function __construct(int $cows_to_add, int $chickens_to_add) {

        $this->last_gather_profit = 0;
        $this->total_profit = 0;
        $this->total_animals = 0;
        $this->animals = array();
        $this->next_id = 0;
        
        for ($j = 1; $j <= $cows_to_add; $j++)
            $this->add_animal(COW);

        for ($i = 1; $i <= $chickens_to_add; $i++)
            $this->add_animal(CHICKEN);

        $this->total_animals = count($this->animals);

        echo get_class().':'.__FUNCTION__ . ":total animals added [$this->total_animals] <br>";
        
    }

    public function add_animal(int $type) {

        if (!is_animal_type_correct($type)) {
            return false;
        }

        switch ($type) {

            case COW: {
                    $this->animals[] = new Cow($this->next_id);
                    break;
                }

            case CHICKEN: {
                    $this->animals[] = new Chicken($this->next_id);
                    break;
                }

            default: {
                    echo get_class().':'.__FUNCTION__ . ":animal type [$type] is undefined, watch for consts <br>";
                    return false;
                }
        }

        echo get_class().':'.__FUNCTION__ . ":animal id [$this->next_id] type [$type] succesfully added <br>";
        
        $this->next_id++;
        
        return true;
        
    }

    public function gather_all() {

        if (!count($this->animals)) {
            echo get_class().':'.__FUNCTION__ . ": no animals was added before <br>";
            return false;
        }
        
        echo get_class().':'.__FUNCTION__.':--------------------------------------------- <br>';
        
        $this->last_gather_profit = 0;
        
        foreach ($this->animals as $animal_id=>$animal) {
            $this->last_gather_profit+=$animal->gather_profit();
        }
        
        $this->total_profit += $this->last_gather_profit;
        
        echo get_class().':'.__FUNCTION__.": gathered for this attempt [$this->last_gather_profit], gathered for all time [$this->total_profit] <br>";
        
    }

}
