<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FulfillmentPreviewShipment extends BaseDto
{
    protected static array $complexArrayTypes = ['fulfillmentPreviewItems' => [FulfillmentPreviewItem::class]];

    /**
     * @param  FulfillmentPreviewItem[]  $fulfillmentPreviewItems An array of fulfillment preview item information.
     * @param  ?string  $earliestShipDate
     * @param  ?string  $latestShipDate
     * @param  ?string  $earliestArrivalDate
     * @param  ?string  $latestArrivalDate
     * @param  ?string[]  $shippingNotes Provides additional insight into the shipment timeline when exact delivery dates are not able to be precomputed.
     */
    public function __construct(
        public readonly array $fulfillmentPreviewItems,
        public readonly ?string $earliestShipDate = null,
        public readonly ?string $latestShipDate = null,
        public readonly ?string $earliestArrivalDate = null,
        public readonly ?string $latestArrivalDate = null,
        public readonly ?array $shippingNotes = null,
    ) {
    }
}
