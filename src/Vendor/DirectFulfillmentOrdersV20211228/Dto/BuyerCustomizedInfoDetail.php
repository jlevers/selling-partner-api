<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class BuyerCustomizedInfoDetail extends BaseDto
{
    /**
     * @param  ?string  $customizedUrl  A [Base 64](https://datatracker.ietf.org/doc/html/rfc4648#section-4) encoded URL using the UTF-8 character set. The URL provides the location of the zip file that specifies the types of customizations or configurations allowed by the vendor, along with types and ranges for the attributes of their products.
     */
    public function __construct(
        public readonly ?string $customizedUrl = null,
    ) {
    }
}
