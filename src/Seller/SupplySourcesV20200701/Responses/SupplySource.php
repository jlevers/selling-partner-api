<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Dto\Address;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Dto\SupplySourceCapabilities;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Dto\SupplySourceConfiguration;

final class SupplySource extends BaseResponse
{
    /**
     * @param  ?string  $supplySourceId  An Amazon generated unique supply source ID.
     * @param  ?string  $supplySourceCode  The seller-provided unique supply source code.
     * @param  ?string  $alias  The custom alias for this supply source
     * @param  ?string  $status  The `SupplySource` status.
     * @param  ?Address  $address  A physical address.
     * @param  ?SupplySourceConfiguration  $configuration  Includes configuration and timezone of a supply source.
     * @param  ?SupplySourceCapabilities  $capabilities  The capabilities of a supply source.
     * @param  ?string  $createdAt  A date and time in the rfc3339 format.
     * @param  ?string  $updatedAt  A date and time in the rfc3339 format.
     */
    public function __construct(
        public readonly ?string $supplySourceId = null,
        public readonly ?string $supplySourceCode = null,
        public readonly ?string $alias = null,
        public readonly ?string $status = null,
        public readonly ?Address $address = null,
        public readonly ?SupplySourceConfiguration $configuration = null,
        public readonly ?SupplySourceCapabilities $capabilities = null,
        public readonly ?string $createdAt = null,
        public readonly ?string $updatedAt = null,
    ) {
    }
}
