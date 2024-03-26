<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Party extends BaseDto
{
    /**
     * @param  ?string  $accountId  This is the Amazon Shipping account id generated during the Amazon Shipping onboarding process.
     */
    public function __construct(
        public readonly ?string $accountId = null,
    ) {
    }
}
