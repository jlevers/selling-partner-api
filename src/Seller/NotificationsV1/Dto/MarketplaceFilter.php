<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class MarketplaceFilter extends BaseDto
{
    /**
     * @param  ?string[]  $marketplaceIds  A list of marketplace identifiers to subscribe to (e.g. ATVPDKIKX0DER). To receive notifications in every marketplace, do not provide this list.
     */
    public function __construct(
        public readonly ?array $marketplaceIds = null,
    ) {
    }
}
