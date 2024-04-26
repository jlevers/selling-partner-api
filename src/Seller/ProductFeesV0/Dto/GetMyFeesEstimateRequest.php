<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductFeesV0\Dto;

use SellingPartnerApi\Dto;

final class GetMyFeesEstimateRequest extends Dto
{
    protected static array $attributeMap = ['feesEstimateRequest' => 'FeesEstimateRequest'];

    /**
     * @param  ?FeesEstimateRequest  $feesEstimateRequest  A product, marketplace, and proposed price used to request estimated fees.
     */
    public function __construct(
        public readonly ?FeesEstimateRequest $feesEstimateRequest = null,
    ) {
    }
}
