<?php

namespace Tests\Unit;

use Tests\Support\UnitTester;
use mchojrin\testing\Calculator;

class CalculatorTest extends \Codeception\Test\Unit
{
    protected UnitTester $tester;

    protected function _before()
    {
    }

    // tests
    public function testAdd()
    {
        $this->assertEquals(8, Calculator::add(3, 5));
    }
}
