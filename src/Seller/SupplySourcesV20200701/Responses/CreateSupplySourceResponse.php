<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class CreateSupplySourceResponse extends BaseResponse
{
    /**
     * @param  string  $supplySourceId  An Amazon generated unique supply source ID.
     * @param  string  $supplySourceCode  The seller-provided unique supply source code.
     */
    public function __construct(
        public readonly string $supplySourceId,
        public readonly string $supplySourceCode,
    ) {
    }
}
