<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class UpdateSupplySourceStatusRequest extends BaseDto
{
    /**
     * @param  ?string  $status  The `SupplySource` status
     */
    public function __construct(
        public readonly ?string $status = null,
    ) {
    }
}
