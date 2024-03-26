<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetFulfillmentPreviewRequest extends BaseDto
{
    protected static array $attributeMap = ['includeCodFulfillmentPreview' => 'includeCODFulfillmentPreview'];

    protected static array $complexArrayTypes = [
        'items' => [GetFulfillmentPreviewItem::class],
        'featureConstraints' => [FeatureSettings::class],
    ];

    /**
     * @param  Address  $address  A physical address.
     * @param  GetFulfillmentPreviewItem[]  $items  An array of fulfillment preview item information.
     * @param  ?string  $marketplaceId  The marketplace the fulfillment order is placed against.
     * @param  ?string[]  $shippingSpeedCategories
     * @param  ?bool  $includeCodFulfillmentPreview  When true, returns all fulfillment order previews both for COD and not for COD. Otherwise, returns only fulfillment order previews that are not for COD.
     * @param  ?bool  $includeDeliveryWindows  When true, returns the ScheduledDeliveryInfo response object, which contains the available delivery windows for a Scheduled Delivery. The ScheduledDeliveryInfo response object can only be returned for fulfillment order previews with ShippingSpeedCategories = ScheduledDelivery.
     * @param  FeatureSettings[]|null  $featureConstraints  A list of features and their fulfillment policies to apply to the order.
     */
    public function __construct(
        public readonly Address $address,
        public readonly array $items,
        public readonly ?string $marketplaceId = null,
        public readonly ?array $shippingSpeedCategories = null,
        public readonly ?bool $includeCodFulfillmentPreview = null,
        public readonly ?bool $includeDeliveryWindows = null,
        public readonly ?array $featureConstraints = null,
    ) {
    }
}
