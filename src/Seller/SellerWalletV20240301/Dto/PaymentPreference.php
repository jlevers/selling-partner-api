<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SellerWalletV20240301\Dto;

use SellingPartnerApi\Dto;

final class PaymentPreference extends Dto
{
    /**
     * @param  string  $paymentPreferencePaymentType  The type of payment preference.
     * @param  float  $value  A decimal number, such as an amount or FX rate.
     */
    public function __construct(
        public string $paymentPreferencePaymentType,
        public float $value,
    ) {}
}
