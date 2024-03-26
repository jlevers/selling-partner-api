<?php

namespace SellingPartnerApi\Seller\ProductFeesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetMyFeesEstimateResult extends BaseDto
{
    protected static array $attributeMap = ['feesEstimateResult' => 'FeesEstimateResult'];

    /**
     * @param  ?FeesEstimateResult  $feesEstimateResult  An item identifier and the estimated fees for the item.
     */
    public function __construct(
        public readonly ?FeesEstimateResult $feesEstimateResult = null,
    ) {
    }
}
