<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FulfillmentPreviewShipment extends BaseDto
{
    protected static array $complexArrayTypes = ['fulfillmentPreviewItems' => [FulfillmentPreviewItem::class]];

    /**
     * @param  FulfillmentPreviewItem[]  $fulfillmentPreviewItems  An array of fulfillment preview item information.
     * @param  ?DateTime  $earliestShipDate
     * @param  ?DateTime  $latestShipDate
     * @param  ?DateTime  $earliestArrivalDate
     * @param  ?DateTime  $latestArrivalDate
     * @param  ?string[]  $shippingNotes  Provides additional insight into the shipment timeline when exact delivery dates are not able to be precomputed.
     */
    public function __construct(
        public readonly array $fulfillmentPreviewItems,
        public readonly ?\DateTime $earliestShipDate = null,
        public readonly ?\DateTime $latestShipDate = null,
        public readonly ?\DateTime $earliestArrivalDate = null,
        public readonly ?\DateTime $latestArrivalDate = null,
        public readonly ?array $shippingNotes = null,
    ) {
    }
}
