<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Dto\Address;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Dto\SupplySourceCapabilities;
use SellingPartnerApi\Seller\SupplySourcesV20200701\Dto\SupplySourceConfiguration;

final class SupplySource extends BaseResponse
{
    /**
     * @param  ?string  $supplySourceId An Amazon generated unique supply source ID.
     * @param  ?string  $supplySourceCode The seller-provided unique supply source code.
     * @param  ?string  $supplySourceAlias The custom alias for this supply source
     * @param  ?string  $supplySourceStatusReadOnly The `SupplySource` status.
     * @param  ?Address  $address A physical address.
     * @param  ?SupplySourceConfiguration  $supplySourceConfiguration Includes configuration and timezone of a supply source.
     * @param  ?SupplySourceCapabilities  $supplySourceCapabilities The capabilities of a supply source.
     * @param  ?string  $dateTime A date and time in the rfc3339 format.
     * @param  ?string  $dateTime A date and time in the rfc3339 format.
     */
    public function __construct(
        public readonly ?string $supplySourceId = null,
        public readonly ?string $supplySourceCode = null,
        public readonly ?string $supplySourceAlias = null,
        public readonly ?string $supplySourceStatusReadOnly = null,
        public readonly ?Address $address = null,
        public readonly ?SupplySourceConfiguration $supplySourceConfiguration = null,
        public readonly ?SupplySourceCapabilities $supplySourceCapabilities = null,
        public readonly ?string $dateTime = null,
    ) {
    }
}
