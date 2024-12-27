<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SellersV1\Dto;

use SellingPartnerApi\Dto;

final class Participation extends Dto
{
    /**
     * @param  bool  $isParticipating  If true, the seller participates in the marketplace.
     * @param  bool  $hasSuspendedListings  If true, the seller has suspended listings.
     */
    public function __construct(
        public bool $isParticipating,
        public bool $hasSuspendedListings,
    ) {}
}
