<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PurchaseShipmentResult extends BaseDto
{
    protected static array $complexArrayTypes = ['labelResults' => [LabelResult::class]];

    /**
     * @param  string  $shipmentId The unique shipment identifier.
     * @param  ServiceRate  $serviceRate The specific rate for a shipping service, or null if no service available.
     * @param  LabelResult[]  $labelResults A list of label results
     */
    public function __construct(
        public readonly ?string $shipmentId = null,
        public readonly ?ServiceRate $serviceRate = null,
        public readonly ?array $labelResults = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
