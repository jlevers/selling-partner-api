<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class UpdateSupplySourceRequest extends BaseDto
{
    /**
     * @param  ?string  $alias  The custom alias for this supply source
     * @param  ?SupplySourceConfiguration  $configuration  Includes configuration and timezone of a supply source.
     * @param  ?SupplySourceCapabilities  $capabilities  The capabilities of a supply source.
     */
    public function __construct(
        public readonly ?string $alias = null,
        public readonly ?SupplySourceConfiguration $configuration = null,
        public readonly ?SupplySourceCapabilities $capabilities = null,
    ) {
    }
}
