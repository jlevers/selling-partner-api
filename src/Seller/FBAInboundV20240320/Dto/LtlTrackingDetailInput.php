<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class LtlTrackingDetailInput extends Dto
{
    /**
     * @param  string[]  $freightBillNumber  Number associated with the freight bill.
     * @param  ?string  $billOfLadingNumber  The number of the carrier shipment acknowledgement document.
     */
    public function __construct(
        public array $freightBillNumber,
        public ?string $billOfLadingNumber = null,
    ) {}
}
