<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class UpdateItemComplianceDetailsRequest extends Dto
{
    /**
     * @param  string  $msku  The merchant SKU, a merchant-supplied identifier for a specific SKU.
     * @param  TaxDetails  $taxDetails  Information used to determine the tax compliance.
     */
    public function __construct(
        public readonly string $msku,
        public readonly TaxDetails $taxDetails,
    ) {
    }
}
