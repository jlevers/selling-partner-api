<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SubmitShipmentConfirmationsRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['shipmentConfirmations' => [ShipmentConfirmation::class]];

    /**
     * @param  ShipmentConfirmation[]  $shipmentConfirmations
     */
    public function __construct(
        public readonly ?array $shipmentConfirmations = null,
    ) {
    }
}
