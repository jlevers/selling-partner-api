<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FulfillmentPreview extends BaseDto
{
    protected static array $attributeMap = ['isCodCapable' => 'isCODCapable'];

    protected static array $complexArrayTypes = [
        'estimatedFees' => [Fee::class],
        'fulfillmentPreviewShipments' => [FulfillmentPreviewShipment::class],
        'unfulfillablePreviewItems' => [UnfulfillablePreviewItem::class],
        'featureConstraints' => [FeatureSettings::class],
    ];

    /**
     * @param  string  $shippingSpeedCategory  The shipping method used for the fulfillment order. When this value is ScheduledDelivery, choose Ship for the fulfillmentAction. Hold is not a valid fulfillmentAction value when the shippingSpeedCategory value is ScheduledDelivery.
     * @param  bool  $isFulfillable  When true, this fulfillment order preview is fulfillable.
     * @param  bool  $isCodCapable  When true, this fulfillment order preview is for COD (Cash On Delivery).
     * @param  string  $marketplaceId  The marketplace the fulfillment order is placed against.
     * @param  ?ScheduledDeliveryInfo  $scheduledDeliveryInfo  Delivery information for a scheduled delivery. This is only available in the JP marketplace.
     * @param  ?Weight  $estimatedShippingWeight  The weight.
     * @param  Fee[]|null  $estimatedFees  An array of fee type and cost pairs.
     * @param  FulfillmentPreviewShipment[]|null  $fulfillmentPreviewShipments  An array of fulfillment preview shipment information.
     * @param  UnfulfillablePreviewItem[]|null  $unfulfillablePreviewItems  An array of unfulfillable preview item information.
     * @param  ?string[]  $orderUnfulfillableReasons
     * @param  FeatureSettings[]|null  $featureConstraints  A list of features and their fulfillment policies to apply to the order.
     */
    public function __construct(
        public readonly string $shippingSpeedCategory,
        public readonly bool $isFulfillable,
        public readonly bool $isCodCapable,
        public readonly string $marketplaceId,
        public readonly ?ScheduledDeliveryInfo $scheduledDeliveryInfo = null,
        public readonly ?Weight $estimatedShippingWeight = null,
        public readonly ?array $estimatedFees = null,
        public readonly ?array $fulfillmentPreviewShipments = null,
        public readonly ?array $unfulfillablePreviewItems = null,
        public readonly ?array $orderUnfulfillableReasons = null,
        public readonly ?array $featureConstraints = null,
    ) {
    }
}
