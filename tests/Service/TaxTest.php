<?php

namespace Test\Service;

use PHPUnit\Framework\TestCase;
use Service\Tax;

class TaxTest extends TestCase
{
    /**
     * @dataProvider taxProvider
     */
    public function test_calculate_tax_by_company_from_ca($company, $ca, $expected)
    {
        $tax = new Tax();
        
        $this->assertEquals(
            $expected, 
            $tax->process($company, $ca)
        );
    }
    
    public function taxProvider()
    {
        return [
            ['AE', 100, 25],
            ['SAS', 150, 49.5]
        ];
    }
}


