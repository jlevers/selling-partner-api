<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateShipmentRequest extends BaseDto
{
    protected static array $attributeMap = [
        'shipmentRequestDetails' => 'ShipmentRequestDetails',
        'shippingServiceId' => 'ShippingServiceId',
        'shippingServiceOfferId' => 'ShippingServiceOfferId',
        'hazmatType' => 'HazmatType',
        'labelFormatOption' => 'LabelFormatOption',
        'shipmentLevelSellerInputsList' => 'ShipmentLevelSellerInputsList',
    ];

    protected static array $complexArrayTypes = ['shipmentLevelSellerInputsList' => [AdditionalSellerInputs::class]];

    /**
     * @param  ShipmentRequestDetails  $shipmentRequestDetails  Shipment information required for requesting shipping service offers or for creating a shipment.
     * @param  string  $shippingServiceId  An Amazon-defined shipping service identifier.
     * @param  ?string  $shippingServiceOfferId  Identifies a shipping service order made by a carrier.
     * @param  ?string  $hazmatType  Hazardous materials options for a package. Consult the terms and conditions for each carrier for more information on hazardous materials.
     * @param  ?LabelFormatOptionRequest  $labelFormatOption  Whether to include a packing slip.
     * @param  AdditionalSellerInputs[]|null  $shipmentLevelSellerInputsList  A list of additional seller input pairs required to purchase shipping.
     */
    public function __construct(
        public readonly ShipmentRequestDetails $shipmentRequestDetails,
        public readonly string $shippingServiceId,
        public readonly ?string $shippingServiceOfferId = null,
        public readonly ?string $hazmatType = null,
        public readonly ?LabelFormatOptionRequest $labelFormatOption = null,
        public readonly ?array $shipmentLevelSellerInputsList = null,
    ) {
    }
}
