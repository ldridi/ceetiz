<?php

namespace Service;

use Service\TaxAe;
use Service\TaxSas;

class TaxContext
{
    static public function get($company)
    {
        switch(strtolower($company)) {
            case 'ae': 
                return new TaxAe();
            case 'sas':
                return new TaxSas();
        }
    }
}
