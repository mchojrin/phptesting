<?php

namespace mchojrin\testing\tests\units;

require_once __DIR__."/../../src/Calculator.php";

use atoum\atoum;
use atoum\atoum\attributes\DataProvider;
use \mchojrin\testing\Calculator as TestedClass;

class CalculatorDataProviderOverride extends atoum\test
{
	public function getTestedClassName(): ?string {
		return TestedClass::class;
	}

	#[DataProvider('originalCases')]
	#[DataProvider('overridingCases')]
	public function test__add(int $first, int $second, int $expected): void {
		$this->integer(TestedClass::add($first, $second))->isEqualTo($expected);
	}

	protected function originalCases(): array {
		return [
			'two positive integers' => [3, 5, 9],
			'adding zero' => [0, 7, 7],
		];
	}

	protected function overridingCases(): array {
		return [
			'large positive integers' => [3000, 5000, 8000],
			'mixed signs' => [-40, 20, -20],
		];
	}
}
