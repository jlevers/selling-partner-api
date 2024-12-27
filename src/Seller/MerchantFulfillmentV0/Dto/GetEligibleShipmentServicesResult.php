<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class GetEligibleShipmentServicesResult extends Dto
{
    protected static array $attributeMap = [
        'shippingServiceList' => 'ShippingServiceList',
        'rejectedShippingServiceList' => 'RejectedShippingServiceList',
        'temporarilyUnavailableCarrierList' => 'TemporarilyUnavailableCarrierList',
        'termsAndConditionsNotAcceptedCarrierList' => 'TermsAndConditionsNotAcceptedCarrierList',
    ];

    protected static array $complexArrayTypes = [
        'shippingServiceList' => ShippingService::class,
        'rejectedShippingServiceList' => RejectedShippingService::class,
        'temporarilyUnavailableCarrierList' => TemporarilyUnavailableCarrier::class,
        'termsAndConditionsNotAcceptedCarrierList' => TermsAndConditionsNotAcceptedCarrier::class,
    ];

    /**
     * @param  ShippingService[]  $shippingServiceList  A list of shipping services offers.
     * @param  RejectedShippingService[]|null  $rejectedShippingServiceList  List of services that are for some reason unavailable for this request
     * @param  TemporarilyUnavailableCarrier[]|null  $temporarilyUnavailableCarrierList  A list of temporarily unavailable carriers.
     * @param  TermsAndConditionsNotAcceptedCarrier[]|null  $termsAndConditionsNotAcceptedCarrierList  List of carriers whose terms and conditions were not accepted by the seller.
     */
    public function __construct(
        public array $shippingServiceList,
        public ?array $rejectedShippingServiceList = null,
        public ?array $temporarilyUnavailableCarrierList = null,
        public ?array $termsAndConditionsNotAcceptedCarrierList = null,
    ) {}
}
