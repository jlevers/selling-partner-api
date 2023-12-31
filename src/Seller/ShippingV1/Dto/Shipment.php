<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Shipment extends BaseDto
{
    protected static array $complexArrayTypes = ['containers' => [Container::class]];

    /**
     * @param  string  $shipmentId The unique shipment identifier.
     * @param  string  $clientReferenceId Client reference id.
     * @param  Address  $address The address.
     * @param  Address  $address The address.
     * @param  AcceptedRate  $acceptedRate The specific rate purchased for the shipment, or null if unpurchased.
     * @param  Party  $party The account related with the shipment.
     * @param  Container[]  $containers A list of container.
     */
    public function __construct(
        public readonly ?string $shipmentId = null,
        public readonly ?string $clientReferenceId = null,
        public readonly ?Address $address = null,
        public readonly ?AcceptedRate $acceptedRate = null,
        public readonly ?Party $party = null,
        public readonly ?array $containers = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
