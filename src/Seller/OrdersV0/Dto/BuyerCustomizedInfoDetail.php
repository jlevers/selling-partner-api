<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class BuyerCustomizedInfoDetail extends Dto
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
