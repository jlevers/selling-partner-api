<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AddressWithContact extends BaseDto
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
