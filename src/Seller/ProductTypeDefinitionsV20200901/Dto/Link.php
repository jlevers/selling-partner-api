<?php

namespace SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Link extends BaseDto
{
    /**
     * @param  string  $resource  URI resource for the link.
     * @param  string  $verb  HTTP method for the link operation.
     */
    public function __construct(
        public readonly string $resource,
        public readonly string $verb,
    ) {
    }
}
