<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace Ibexa\Contracts\CoreSearch\Values\Query\Criterion;

class LogicalOr extends AbstractCompositeCriterion
{
}

class_alias(\Ibexa\Contracts\CoreSearch\Values\Query\Criterion\LogicalOr::class, \Ibexa\Contracts\ProductCatalog\Values\Common\Query\Criterion\LogicalOr::class);
