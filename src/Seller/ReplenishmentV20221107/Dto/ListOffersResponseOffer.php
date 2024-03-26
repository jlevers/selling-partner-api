<?php

namespace SellingPartnerApi\Seller\ReplenishmentV20221107\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ListOffersResponseOffer extends BaseDto
{
    /**
     * @param  ?string  $sku  The SKU. This property is only supported for sellers and not for vendors.
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN).
     * @param  ?string  $marketplaceId  The marketplace identifier. The supported marketplaces for both sellers and vendors are US, CA, ES, UK, FR, IT, IN, DE and JP. The supported marketplaces for vendors only are BR, AU, MX, AE and NL. Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) to find the identifier for the marketplace.
     * @param  ?string  $eligibility  The current eligibility status of an offer.
     * @param  ?OfferProgramConfiguration  $offerProgramConfiguration  The offer program configuration contains a set of program properties for an offer.
     * @param  ?string  $programType  The replenishment program type.
     * @param  ?string[]  $vendorCodes  A list of vendor codes associated with the offer.
     */
    public function __construct(
        public readonly ?string $sku = null,
        public readonly ?string $asin = null,
        public readonly ?string $marketplaceId = null,
        public readonly ?string $eligibility = null,
        public readonly ?OfferProgramConfiguration $offerProgramConfiguration = null,
        public readonly ?string $programType = null,
        public readonly ?array $vendorCodes = null,
    ) {
    }
}
