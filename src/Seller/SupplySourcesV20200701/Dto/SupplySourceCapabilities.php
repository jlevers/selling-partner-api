<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SupplySourceCapabilities extends BaseDto
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
