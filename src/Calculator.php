<?php

namespace mchojrin\testing;

require_once __DIR__.'/Multiplier.php';

class Calculator {
	private Multiplier $multiplier;

	public function __construct(?Multiplier $multiplier = null) {
		$this->multiplier = $multiplier ?? new Multiplier();
	}

	public static function add(int $first, int $second): int {
		
		return $first + $second;
	}

	public function addThenMultiply(int $first, int $second, int $factor): int {
		return $this->multiplier->multiply(self::add($first, $second), $factor);
	}

	public static function divide(int $first, int $second): int {
		return intdiv($first, $second);
	}
}
