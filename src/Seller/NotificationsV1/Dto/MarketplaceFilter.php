<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\NotificationsV1\Dto;

use SellingPartnerApi\Dto;

final class MarketplaceFilter extends Dto
{
    /**
     * @param  ?string[]  $marketplaceIds  A list of marketplace identifiers to subscribe to (e.g. ATVPDKIKX0DER). To receive notifications in every marketplace, do not provide this list.
     */
    public function __construct(
        public readonly ?array $marketplaceIds = null,
    ) {
    }
}
