<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use SellingPartnerApi\Dto;

final class ContactDetails extends Dto
{
    /**
     * @param  ?Primary  $primary
     */
    public function __construct(
        public readonly ?Primary $primary = null,
    ) {
    }
}
