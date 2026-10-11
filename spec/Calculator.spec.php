<?php

require_once __DIR__."/../src/Calculator.php";

use mchojrin\testing\Calculator;

describe("add", function() {
        it("sums two integers", function() {
            expect(Calculator::add(3,5))->toBe(8);
        });
});
