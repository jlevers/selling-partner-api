<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class LtlTrackingDetailInput extends Dto
{
    /**
     * @param  string[]  $freightBillNumber  The number associated with the freight bill.
     * @param  ?string  $billOfLadingNumber  The number of the carrier shipment acknowledgement document.
     */
    public function __construct(
        public readonly array $freightBillNumber,
        public readonly ?string $billOfLadingNumber = null,
    ) {
    }
}
