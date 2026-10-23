<?php

namespace Tests\Unit;

require_once __DIR__."/../../src/Calculator.php";

use Codeception\Test\Unit;
use mchojrin\testing\Calculator;
use Tests\Support\UnitTester;
class CalculatorTest extends Unit
{
    protected UnitTester $tester;

    protected function _before()
    {
    }

    // tests
    public function testAdd()
    {
        verify(Calculator::add(3, 5))->equals(8);
    }
}
