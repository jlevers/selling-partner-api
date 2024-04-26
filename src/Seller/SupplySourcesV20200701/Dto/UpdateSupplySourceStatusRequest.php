<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use SellingPartnerApi\Dto;

final class UpdateSupplySourceStatusRequest extends Dto
{
    /**
     * @param  ?string  $status  The `SupplySource` status
     */
    public function __construct(
        public readonly ?string $status = null,
    ) {
    }
}
