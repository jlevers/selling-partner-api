<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use SellingPartnerApi\Dto;

final class Account extends Dto
{
    /**
     * @param  string  $accountId  This is the Amazon Shipping account id generated during the Amazon Shipping onboarding process.
     */
    public function __construct(
        public string $accountId,
    ) {}
}
