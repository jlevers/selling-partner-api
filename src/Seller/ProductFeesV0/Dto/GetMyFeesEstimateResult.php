<?php

namespace SellingPartnerApi\Seller\ProductFeesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetMyFeesEstimateResult extends BaseDto
{
    /**
     * @param  ?FeesEstimateResult  $feesEstimateResult An item identifier and the estimated fees for the item.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?FeesEstimateResult $feesEstimateResult = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
