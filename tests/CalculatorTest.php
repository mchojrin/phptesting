<?php

require_once __DIR__."/../src/Calculator.php";

use PHPUnit\Framework\TestCase;
use \mchojrin\testing\Calculator;

class CalculatorTest extends TestCase {
	public function testAdd() {
		$this->assertEquals(Calculator::add(3,5), 8);
	}
}
