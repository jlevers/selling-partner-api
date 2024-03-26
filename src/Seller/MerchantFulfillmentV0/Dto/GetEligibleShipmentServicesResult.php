<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetEligibleShipmentServicesResult extends BaseDto
{
    protected static array $attributeMap = [
        'shippingServiceList' => 'ShippingServiceList',
        'rejectedShippingServiceList' => 'RejectedShippingServiceList',
        'temporarilyUnavailableCarrierList' => 'TemporarilyUnavailableCarrierList',
        'termsAndConditionsNotAcceptedCarrierList' => 'TermsAndConditionsNotAcceptedCarrierList',
    ];

    protected static array $complexArrayTypes = [
        'shippingServiceList' => [ShippingService::class],
        'rejectedShippingServiceList' => [RejectedShippingService::class],
        'temporarilyUnavailableCarrierList' => [TemporarilyUnavailableCarrier::class],
        'termsAndConditionsNotAcceptedCarrierList' => [TermsAndConditionsNotAcceptedCarrier::class],
    ];

    /**
     * @param  ShippingService[]  $shippingServiceList  A list of shipping services offers.
     * @param  RejectedShippingService[]|null  $rejectedShippingServiceList  List of services that were for some reason unavailable for this request
     * @param  TemporarilyUnavailableCarrier[]|null  $temporarilyUnavailableCarrierList  A list of temporarily unavailable carriers.
     * @param  TermsAndConditionsNotAcceptedCarrier[]|null  $termsAndConditionsNotAcceptedCarrierList  List of carriers whose terms and conditions were not accepted by the seller.
     */
    public function __construct(
        public readonly array $shippingServiceList,
        public readonly ?array $rejectedShippingServiceList = null,
        public readonly ?array $temporarilyUnavailableCarrierList = null,
        public readonly ?array $termsAndConditionsNotAcceptedCarrierList = null,
    ) {
    }
}
