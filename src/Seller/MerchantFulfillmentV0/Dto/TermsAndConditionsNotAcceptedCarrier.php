<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class TermsAndConditionsNotAcceptedCarrier extends Dto
{
    protected static array $attributeMap = ['carrierName' => 'CarrierName'];

    /**
     * @param  string  $carrierName  The name of the carrier.
     */
    public function __construct(
        public readonly string $carrierName,
    ) {
    }
}
