<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetRatesRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['containerSpecifications' => [ContainerSpecification::class]];

    /**
     * @param  Address  $shipTo  The address.
     * @param  Address  $shipFrom  The address.
     * @param  string[]  $serviceTypes  A list of service types that can be used to send the shipment.
     * @param  ContainerSpecification[]  $containerSpecifications  A list of container specifications.
     * @param  ?DateTime  $shipDate  The start date and time. This defaults to the current date and time.
     */
    public function __construct(
        public readonly Address $shipTo,
        public readonly Address $shipFrom,
        public readonly array $serviceTypes,
        public readonly array $containerSpecifications,
        public readonly ?\DateTime $shipDate = null,
    ) {
    }
}
