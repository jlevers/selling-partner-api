<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Shipment extends BaseDto
{
    protected static array $complexArrayTypes = ['containers' => [Container::class]];

    /**
     * @param  string  $shipmentId The unique shipment identifier.
     * @param  string  $clientReferenceId Client reference id.
     * @param  Address  $shipFrom The address.
     * @param  Address  $shipTo The address.
     * @param  ?AcceptedRate  $acceptedRate The specific rate purchased for the shipment, or null if unpurchased.
     * @param  ?Party  $shipper The account related with the shipment.
     * @param  Container[]  $containers A list of container.
     */
    public function __construct(
        public readonly string $shipmentId,
        public readonly string $clientReferenceId,
        public readonly Address $shipFrom,
        public readonly Address $shipTo,
        public readonly ?AcceptedRate $acceptedRate = null,
        public readonly ?Party $shipper = null,
        public readonly ?array $containers = null,
    ) {
    }
}
