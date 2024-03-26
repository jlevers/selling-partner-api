<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PurchaseLabelsResult extends BaseDto
{
    protected static array $complexArrayTypes = ['labelResults' => [LabelResult::class]];

    /**
     * @param  string  $shipmentId  The unique shipment identifier.
     * @param  AcceptedRate  $acceptedRate  The specific rate purchased for the shipment, or null if unpurchased.
     * @param  LabelResult[]  $labelResults  A list of label results
     * @param  ?string  $clientReferenceId  Client reference id.
     */
    public function __construct(
        public readonly string $shipmentId,
        public readonly AcceptedRate $acceptedRate,
        public readonly array $labelResults,
        public readonly ?string $clientReferenceId = null,
    ) {
    }
}
