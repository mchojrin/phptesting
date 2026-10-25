<?php

namespace mchojrin\testing\tests\units;

use atoum\atoum;
use \mchojrin\testing\Calculator as TestedClass;

class Calculator extends atoum\test
{
	public function test__add(): void {
		$this
			->integer(TestedClass::add(3,5))
			->isEqualTo(8);
	}
}
