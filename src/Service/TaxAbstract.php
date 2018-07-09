<?php

namespace Service;

abstract class TaxAbstract 
{
    protected $siret;
    protected $name;
    
    abstract public function calculate($ca);
}
