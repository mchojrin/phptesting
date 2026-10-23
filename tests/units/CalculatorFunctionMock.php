<?php

namespace mchojrin\testing\tests\units;

require_once __DIR__."/../../src/Calculator.php";

use atoum\atoum;
use \mchojrin\testing\Calculator as TestedClass;

class CalculatorFunctionMock extends atoum\test
{
	public function getTestedClassName(): ?string {
		return TestedClass::class;
	}

	public function test__divide(): void {
		$this
			->given($this->function->intdiv = 42)
			->when($result = TestedClass::divide(10, 2))
			->then
				->integer($result)->isEqualTo(42)
				->function('intdiv')->wasCalledWithArguments(10, 2)->once()
		;
	}
}
