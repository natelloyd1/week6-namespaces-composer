<?php

namespace App\Stuff\Things; 

//3

class Potato {

private $water = 0;

// public function water() 
//     {
//     return $water < 5 ? $water += 1 : true;
//     return $this; 
//     }


public function water()
    {
        $this->water += 1;
        return $this;
    }

public function hasGrown() 
    {
    return $this->water >= 5;
    }
}
