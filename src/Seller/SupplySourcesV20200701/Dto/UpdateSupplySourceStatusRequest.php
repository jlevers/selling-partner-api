<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class UpdateSupplySourceStatusRequest extends BaseDto
{
    /**
     * @param  ?string  $status The `SupplySource` status
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?string $status = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
