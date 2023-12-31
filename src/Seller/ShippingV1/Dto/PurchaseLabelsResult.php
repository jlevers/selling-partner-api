<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PurchaseLabelsResult extends BaseDto
{
    protected static array $complexArrayTypes = ['labelResults' => [LabelResult::class]];

    /**
     * @param  string  $shipmentId The unique shipment identifier.
     * @param  string  $clientReferenceId Client reference id.
     * @param  AcceptedRate  $acceptedRate The specific rate purchased for the shipment, or null if unpurchased.
     * @param  LabelResult[]  $labelResults A list of label results
     */
    public function __construct(
        public readonly ?string $shipmentId = null,
        public readonly ?string $clientReferenceId = null,
        public readonly ?AcceptedRate $acceptedRate = null,
        public readonly ?array $labelResults = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
