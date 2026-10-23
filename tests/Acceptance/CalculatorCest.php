<?php

declare(strict_types=1);

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

final class CalculatorCest
{
    public function _before(AcceptanceTester $I): void
    {
        // Code here will be executed before each test function.
    }

    // All `public` methods will be executed as tests.
    public function tryToTest(AcceptanceTester $I): void
    {
        $I->wantTo('Add two numbers');
        $I->amOnPage('/');
        $I->see('First number');
        $I->see('Second number');
        $I->seeElement('input[type=submit]', ['value'=>'Add']);
        $I->fillField('first_number', '3');
        $I->fillField('second_number', '5');
        $I->click('Add');
        $I->seeInField('result', 8);
    }
}
