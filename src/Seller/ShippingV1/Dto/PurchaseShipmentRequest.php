<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PurchaseShipmentRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['containers' => [Container::class]];

    /**
     * @param  string  $clientReferenceId Client reference id.
     * @param  Address  $address The address.
     * @param  Address  $address The address.
     * @param  string  $shipDate The start date and time. This defaults to the current date and time.
     * @param  string  $serviceType The type of shipping service that will be used for the service offering.
     * @param  Container[]  $containers A list of container.
     * @param  LabelSpecification  $labelSpecification The label specification info.
     */
    public function __construct(
        public readonly ?string $clientReferenceId = null,
        public readonly ?Address $address = null,
        public readonly ?string $shipDate = null,
        public readonly ?string $serviceType = null,
        public readonly ?array $containers = null,
        public readonly ?LabelSpecification $labelSpecification = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
