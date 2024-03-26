<?php

namespace SellingPartnerApi\Seller\CatalogItemsV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreatorType extends BaseDto
{
    protected static array $attributeMap = ['role' => 'Role'];

    /**
     * @param  ?string  $value  The value of the attribute.
     * @param  ?string  $role  The role of the value.
     */
    public function __construct(
        public readonly ?string $value = null,
        public readonly ?string $role = null,
    ) {
    }
}
