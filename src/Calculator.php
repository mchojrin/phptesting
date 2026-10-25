<?php

namespace mchojrin\testing;

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

public static function addRandom(int $value): int {
   return self::add($value, random_int(1, 100));
}
}
