<?php

namespace SellingPartnerApi\Seller\SellersV1\Dto;

class Participation
{
    /**
     * @param  bool  $hasSuspendedListings Specifies if the seller has suspended listings. True if the seller Listing Status is set to Inactive, otherwise False.
     */
    public function __construct(
        public bool $isParticipating,
        public bool $hasSuspendedListings,
    ) {
    }
}
