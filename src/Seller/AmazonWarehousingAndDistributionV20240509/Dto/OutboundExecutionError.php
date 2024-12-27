<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\AmazonWarehousingAndDistributionV20240509\Dto;

use SellingPartnerApi\Dto;

final class OutboundExecutionError extends Dto
{
    /**
     * @param  string  $failureCode  Failure code details for the error.
     * @param  string[]  $failureReasons  Failure reasons for the error.
     * @param  ?string  $sku  MSKU associated with the error.
     */
    public function __construct(
        public string $failureCode,
        public array $failureReasons,
        public ?string $sku = null,
    ) {}
}
