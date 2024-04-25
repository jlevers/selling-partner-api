<?php

declare(strict_types=1);

namespace SellingPartnerApi\Contracts;

interface Deserializable
{
    public static function deserialize(mixed $data): mixed;
}
