<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class BuyerCustomizedInfoDetail extends BaseDto
{
    protected static array $attributeMap = ['customizedUrl' => 'CustomizedURL'];

    /**
     * @param  ?string  $customizedUrl  The location of a zip file containing Amazon Custom data.
     */
    public function __construct(
        public readonly ?string $customizedUrl = null,
    ) {
    }
}
