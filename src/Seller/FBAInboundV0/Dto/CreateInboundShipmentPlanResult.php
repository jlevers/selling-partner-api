<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateInboundShipmentPlanResult extends BaseDto
{
    protected static array $complexArrayTypes = ['inboundShipmentPlans' => [InboundShipmentPlan::class]];

    /**
     * @param  InboundShipmentPlan[]  $inboundShipmentPlans A list of inbound shipment plan information
     */
    public function __construct(
        public readonly ?array $inboundShipmentPlans = null,
    ) {
    }
}
