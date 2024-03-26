<?php

namespace SellingPartnerApi\Seller\SellersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Participation extends BaseDto
{
    /**
     * @param  bool  $hasSuspendedListings  Specifies if the seller has suspended listings. True if the seller Listing Status is set to Inactive, otherwise False.
     */
    public function __construct(
        public readonly bool $isParticipating,
        public readonly bool $hasSuspendedListings,
    ) {
    }
}
