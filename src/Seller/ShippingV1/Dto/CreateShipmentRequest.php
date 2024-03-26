<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateShipmentRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['containers' => [Container::class]];

    /**
     * @param  string  $clientReferenceId  Client reference id.
     * @param  Address  $shipTo  The address.
     * @param  Address  $shipFrom  The address.
     * @param  Container[]  $containers  A list of container.
     */
    public function __construct(
        public readonly string $clientReferenceId,
        public readonly Address $shipTo,
        public readonly Address $shipFrom,
        public readonly array $containers,
    ) {
    }
}
