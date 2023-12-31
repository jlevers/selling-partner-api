<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreatorType extends BaseDto
{
    /**
     * @param  string  $value The value of the attribute.
     * @param  string  $role The role of the value.
     */
    public function __construct(
        public readonly string $value,
        public readonly string $role,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
