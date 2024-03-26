<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateShipmentResult extends BaseDto
{
    protected static array $complexArrayTypes = ['eligibleRates' => [Rate::class]];

    /**
     * @param  string  $shipmentId  The unique shipment identifier.
     * @param  Rate[]  $eligibleRates  A list of all the available rates that can be used to send the shipment.
     */
    public function __construct(
        public readonly string $shipmentId,
        public readonly array $eligibleRates,
    ) {
    }
}
