<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV20240619\Dto;

use SellingPartnerApi\Dto;

final class PaymentsContext extends Dto
{
    /**
     * @param  ?string  $paymentType  Type of payment made.
     * @param  ?string  $paymentMethod  Method of payment made.
     * @param  ?string  $paymentReference  Reference number of payment made.
     * @param  ?\DateTimeInterface  $paymentDate  Fields with a schema type of date are in ISO 8601 date time format (for example GroupBeginDate).
     */
    public function __construct(
        public ?string $paymentType = null,
        public ?string $paymentMethod = null,
        public ?string $paymentReference = null,
        public ?\DateTimeInterface $paymentDate = null,
    ) {}
}
