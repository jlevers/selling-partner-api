<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetEligibleShipmentServicesResult extends BaseDto
{
    protected static array $complexArrayTypes = [
        'shippingServiceList' => [ShippingService::class],
        'rejectedShippingServiceList' => [RejectedShippingService::class],
        'temporarilyUnavailableCarrierList' => [TemporarilyUnavailableCarrier::class],
        'termsAndConditionsNotAcceptedCarrierList' => [TermsAndConditionsNotAcceptedCarrier::class],
    ];

    /**
     * @param  ShippingService[]  $shippingServiceList A list of shipping services offers.
     * @param  RejectedShippingService[]  $rejectedShippingServiceList List of services that were for some reason unavailable for this request
     * @param  TemporarilyUnavailableCarrier[]  $temporarilyUnavailableCarrierList A list of temporarily unavailable carriers.
     * @param  TermsAndConditionsNotAcceptedCarrier[]  $termsAndConditionsNotAcceptedCarrierList List of carriers whose terms and conditions were not accepted by the seller.
     */
    public function __construct(
        public readonly ?array $shippingServiceList = null,
        public readonly ?array $rejectedShippingServiceList = null,
        public readonly ?array $temporarilyUnavailableCarrierList = null,
        public readonly ?array $termsAndConditionsNotAcceptedCarrierList = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}