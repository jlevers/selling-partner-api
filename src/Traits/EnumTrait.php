<?php

declare(strict_types=1);

namespace SellingPartnerApi\Traits;

trait EnumTrait
{
    /**
     * Get all possible base enum values.
     *
     * @return array[string]
     */
    public static function values(): array
    {
        return array_map(
            fn ($e) => $e->value,
            self::cases()
        );
    }
}
