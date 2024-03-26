<?php

namespace SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PropertyGroup extends BaseDto
{
    /**
     * @param  ?string  $title  The display label of the property group.
     * @param  ?string  $description  The description of the property group.
     * @param  ?string[]  $propertyNames  The names of the schema properties for the property group.
     */
    public function __construct(
        public readonly ?string $title = null,
        public readonly ?string $description = null,
        public readonly ?array $propertyNames = null,
    ) {
    }
}
