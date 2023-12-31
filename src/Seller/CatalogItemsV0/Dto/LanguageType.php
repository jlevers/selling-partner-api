<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class LanguageType extends BaseDto
{
    /**
     * @param  string  $name The name attribute of the item.
     * @param  string  $type The type attribute of the item.
     * @param  string  $audioFormat The audio format attribute of the item.
     */
    public function __construct(
        public readonly string $name,
        public readonly string $type,
        public readonly string $audioFormat,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
