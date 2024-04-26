<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use SellingPartnerApi\Dto;

final class Account extends Dto
{
    /**
     * @param  string  $accountId  This is the Amazon Shipping account id generated during the Amazon Shipping onboarding process.
     */
    public function __construct(
        public readonly string $accountId,
    ) {
    }
}
