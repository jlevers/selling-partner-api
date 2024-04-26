<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use SellingPartnerApi\Dto;

final class SupplySourceCapabilities extends Dto
{
    /**
     * @param  ?OutboundCapability  $outbound  The outbound capability of a supply source.
     * @param  ?ServicesCapability  $services  The services capability of a supply source.
     */
    public function __construct(
        public readonly ?OutboundCapability $outbound = null,
        public readonly ?ServicesCapability $services = null,
    ) {
    }
}
