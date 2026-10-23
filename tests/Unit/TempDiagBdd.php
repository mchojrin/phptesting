<?php

namespace mchojrin\testing\tests\units;

require_once __DIR__."/../../src/Calculator.php";

use atoum\atoum;
use \mchojrin\testing\Calculator as TestedClass;

/**
 * Showcase of atoum-next's BDD (given/when/then) syntax.
 */
class TempDiagBdd extends atoum\test
{
	/**
	 * atoum infers the tested class from the test class name, so point it
	 * explicitly at Calculator (the class under test).
	 */
	public function getTestedClassName(): ?string {
		return TestedClass::class;
	}

	/**
	 * Classic BDD flow: give the inputs, run the action, assert the outcome.
	 */
	public function test__add_with_bdd_style(): void {
		$this
			// Given a pair of integers...
			->given($first = 3, $second = 5)
			// When they are added together...
			->when($result = TestedClass::add($first, $second))
			// Then the result is the expected sum, and it is positive.
			->then
				->integer($result)
					->isEqualTo(8)
				->and
				->integer($result)->isGreaterThan(0)
		;
	}
}
