<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ReturnLocation extends BaseDto
{
    /**
     * @param  ?string  $supplySourceId  The Amazon provided `supplySourceId` where orders can be returned to.
     * @param  ?AddressWithContact  $addressWithContact  The address and contact details.
     */
    public function __construct(
        public readonly ?string $supplySourceId = null,
        public readonly ?AddressWithContact $addressWithContact = null,
    ) {
    }
}
