<?php

namespace mchojrin\testing\tests\units;

require_once __DIR__."/../../src/Calculator.php";

use atoum\atoum;
use atoum\atoum\attributes\DataProvider;
use \mchojrin\testing\Calculator as TestedClass;

class CalculatorDataProvider extends atoum\test
{
	public function getTestedClassName(): ?string {
		return TestedClass::class;
	}

	#[DataProvider('additionCases')]
	public function test__add(int $first, int $second, int $expected): void {
		$this->integer(TestedClass::add($first, $second))->isEqualTo($expected);
	}

	protected function additionCases(): array {
		return [
			'two positive integers' => [3, 5, 8],
			'adding zero' => [0, 7, 7],
			'negative result' => [4, -6, -2],
		];
	}
}
