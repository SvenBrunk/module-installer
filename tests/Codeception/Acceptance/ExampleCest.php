<?php

/**
 * Copyright © . All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace \Tests\Codeception\Acceptance;

use OxidEsales\Codeception\Module\Translation\Translator;
use \Tests\Codeception\Support\AcceptanceTester;

/**
 * @group oe_module_installer
 * @group oe_module_installer_startpage
 */
final class ExampleCest
{
    public function testCanOpenShopStartPage(AcceptanceTester $I): void
    {
        $I->wantToTest('that codeception tests are working');

        $I->openShop();
        $I->waitForPageLoad();

        $I->see(Translator::translate('HOME'));
    }
}
