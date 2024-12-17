<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class LtlTrackingDetail extends Dto
{
    /**
     * @param  ?string  $billOfLadingNumber  The number of the carrier shipment acknowledgement document.
     * @param  ?string[]  $freightBillNumber  The number associated with the freight bill.
     */
    public function __construct(
        public ?string $billOfLadingNumber = null,
        public ?array $freightBillNumber = null,
    ) {}
}
