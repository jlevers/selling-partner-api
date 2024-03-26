<?php

namespace SellingPartnerApi\Seller\SellersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class MarketplaceParticipation extends BaseDto
{
    /**
     * @param  Marketplace  $marketplace  Detailed information about an Amazon market where a seller can list items for sale and customers can view and purchase items.
     * @param  Participation  $participation  Detailed information that is specific to a seller in a Marketplace.
     */
    public function __construct(
        public readonly Marketplace $marketplace,
        public readonly Participation $participation,
    ) {
    }
}
