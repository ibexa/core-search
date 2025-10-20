<?php

namespace Ibexa\Contracts\CoreSearch\Values\Query;

interface PaginationAwareInterface
{
    public function getOffset(): int;

    public function getLimit(): ?int;
}
