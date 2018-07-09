<?php

namespace Service;

use Service\TaxAbstract;

class TaxAe extends TaxAbstract
{
    private $rate = 25;
    
    public function calculate($ca) {
        return $ca * ($this->rate/100);
    }
}
