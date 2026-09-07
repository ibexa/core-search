<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

use Behat\Config\Config;
use Behat\Config\Profile;
use Behat\Config\Suite;
use Ibexa\Behat\API\Context\TestContext;
use Ibexa\Behat\Browser\Context\AuthenticationContext;

return (new Config())
    ->import('../../ibexa/behat/behat_ibexa_oss.yaml')
    ->withProfile((new Profile('browser'))
        ->withSuite((new Suite('core-search'))
            ->withContexts(
                TestContext::class,
                AuthenticationContext::class
            )
            ->withPaths('%paths.base%/features/browser')));
