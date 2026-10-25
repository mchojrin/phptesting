<?php

use mchojrin\testing\Calculator;

use Kahlan\Plugin\Monkey;
describe('::add()', function () {

        $datasets = [
            'two positive integers' => [3, 5, 8],
            'two negative integers' => [-3, -5, -8],
            'mixed signs'           => [-3, 5, 2],
            'two zeros'             => [0, 0, 0],
        ];

        foreach ($datasets as $label=>[$first, $second, $expected]) {
            it("adds $label",function()use($first, $second, $expected) {
                expect(Calculator::add($first, $second))->toBe($expected);
            });
        }

});


describe('::addRandom()', function () {

        it('adds the generated random number to the given value', function () {
            Monkey::patch('random_int', fn () => 42);

            expect(Calculator::addRandom(8))->toBe(50);
        });

        it('picks a random number between 1 and 100', function () {
                allow('random_int')
                        ->toBeCalled()
                        ->andReturn(7);

                expect('random_int')
                        ->toBeCalled()
                        ->with(1, 100)
                        ->once();

                expect(Calculator::addRandom(8))
                        ->toBe(15);
        });

    });

