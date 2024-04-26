<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use SellingPartnerApi\Dto;

final class AddressWithContact extends Dto
{
    /**
     * @param  ?ContactDetails  $contactDetails  The contact details
     * @param  ?Address  $address  A physical address.
     */
    public function __construct(
        public readonly ?ContactDetails $contactDetails = null,
        public readonly ?Address $address = null,
    ) {
    }
}
