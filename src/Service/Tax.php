<?php

namespace Service;

use Service\TaxContext;

class Tax 
{
    public function process($company, $ca) {
    
        $driver = TaxContext::get($company);
        
        return $driver->calculate($ca);
    }
}
