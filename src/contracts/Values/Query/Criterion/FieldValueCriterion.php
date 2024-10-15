<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace Ibexa\Contracts\CoreSearch\Values\Query\Criterion;

class FieldValueCriterion implements CriterionInterface
{
    /** @final */
    public const COMPARISON_EQ = '=';
    /** @final */
    public const COMPARISON_NEQ = '<>';
    /** @final */
    public const COMPARISON_LT = '<';
    /** @final */
    public const COMPARISON_LTE = '<=';
    /** @final */
    public const COMPARISON_GT = '>';
    /** @final */
    public const COMPARISON_GTE = '>=';
    /** @final */
    public const COMPARISON_IN = 'IN';
    /** @final */
    public const COMPARISON_NIN = 'NIN';
    /** @final */
    public const COMPARISON_CONTAINS = 'CONTAINS';
    /** @final */
    public const COMPARISON_MEMBER_OF = 'MEMBER_OF';
    /** @final */
    public const COMPARISON_STARTS_WITH = 'STARTS_WITH';
    /** @final */
    public const COMPARISON_ENDS_WITH = 'ENDS_WITH';

    private string $field;

    /** @var mixed */
    private $value;

    private string $operator;

    /**
     * @param mixed $value
     */
    public function __construct(string $field, $value, ?string $operator = null)
    {
        $this->field = $field;
        $this->value = $value;
        $this->operator = $operator ?? (is_array($value) ? self::COMPARISON_IN : self::COMPARISON_EQ);
    }

    public function getField(): string
    {
        return $this->field;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    public function setOperator(string $operator): void
    {
        $this->operator = $operator;
    }

    public function getOperator(): string
    {
        return $this->operator;
    }
}

class_alias(\Ibexa\Contracts\CoreSearch\Values\Query\Criterion\FieldValueCriterion::class, '\Ibexa\Contracts\ProductCatalog\Values\Common\Query\Criterion\FieldValueCriterion');
