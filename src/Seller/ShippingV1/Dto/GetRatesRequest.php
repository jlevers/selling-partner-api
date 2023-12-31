<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetRatesRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['containerSpecifications' => [ContainerSpecification::class]];

    /**
     * @param  Address  $address The address.
     * @param  Address  $address The address.
     * @param  string[]  $serviceTypes A list of service types that can be used to send the shipment.
     * @param  string  $shipDate The start date and time. This defaults to the current date and time.
     * @param  ContainerSpecification[]  $containerSpecifications A list of container specifications.
     */
    public function __construct(
        public readonly ?Address $address = null,
        public readonly ?array $serviceTypes = null,
        public readonly ?string $shipDate = null,
        public readonly ?array $containerSpecifications = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
