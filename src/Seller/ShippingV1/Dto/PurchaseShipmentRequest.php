<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PurchaseShipmentRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['containers' => [Container::class]];

    /**
     * @param  string  $clientReferenceId  Client reference id.
     * @param  Address  $shipTo  The address.
     * @param  Address  $shipFrom  The address.
     * @param  string  $serviceType  The type of shipping service that will be used for the service offering.
     * @param  Container[]  $containers  A list of container.
     * @param  LabelSpecification  $labelSpecification  The label specification info.
     * @param  ?DateTime  $shipDate  The start date and time. This defaults to the current date and time.
     */
    public function __construct(
        public readonly string $clientReferenceId,
        public readonly Address $shipTo,
        public readonly Address $shipFrom,
        public readonly string $serviceType,
        public readonly array $containers,
        public readonly LabelSpecification $labelSpecification,
        public readonly ?\DateTime $shipDate = null,
    ) {
    }
}
