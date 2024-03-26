<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetEligibleShipmentServicesRequest extends BaseDto
{
    protected static array $attributeMap = [
        'shipmentRequestDetails' => 'ShipmentRequestDetails',
        'shippingOfferingFilter' => 'ShippingOfferingFilter',
    ];

    /**
     * @param  ShipmentRequestDetails  $shipmentRequestDetails  Shipment information required for requesting shipping service offers or for creating a shipment.
     * @param  ?ShippingOfferingFilter  $shippingOfferingFilter  Filter for use when requesting eligible shipping services.
     */
    public function __construct(
        public readonly ShipmentRequestDetails $shipmentRequestDetails,
        public readonly ?ShippingOfferingFilter $shippingOfferingFilter = null,
    ) {
    }
}
