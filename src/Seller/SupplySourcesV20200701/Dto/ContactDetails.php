<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ContactDetails extends BaseDto
{
    /**
     * @param  ?Primary  $primary
     */
    public function __construct(
        public readonly ?Primary $primary = null,
    ) {
    }
}
