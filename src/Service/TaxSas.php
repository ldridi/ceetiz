<?php

namespace Service;

use Service\TaxAbstract;

class TaxSas extends TaxAbstract
{
    private $address;
    private $rate = 33;
    
    public function calculate($ca) {
        return $ca * ($this->rate/100);
    }
}
