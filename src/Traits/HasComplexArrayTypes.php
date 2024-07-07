<?php

declare(strict_types=1);

namespace SellingPartnerApi\Traits;

trait HasComplexArrayTypes
{
    /**
     * Override this to specify the item types (and key types, if necessary) of attributes.
     * Valid values look like ['attributeName' => SomeType::class]
     */
    protected static array $complexArrayTypes = [];

    protected static function getArrayType(string $attributeName): array|string
    {
        if (! array_key_exists($attributeName, static::$complexArrayTypes)) {
            return 'array';
        }

        return [static::$complexArrayTypes[$attributeName]];
    }
}
