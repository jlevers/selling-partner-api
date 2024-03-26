<?php

namespace SellingPartnerApi\Seller\ListingsRestrictionsV20210801\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Link extends BaseDto
{
    /**
     * @param  string  $resource  The URI of the related resource.
     * @param  string  $verb  The HTTP verb used to interact with the related resource.
     * @param  ?string  $title  The title of the related resource.
     * @param  ?string  $type  The media type of the related resource.
     */
    public function __construct(
        public readonly string $resource,
        public readonly string $verb,
        public readonly ?string $title = null,
        public readonly ?string $type = null,
    ) {
    }
}
