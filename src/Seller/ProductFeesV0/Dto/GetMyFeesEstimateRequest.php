<?php

namespace SellingPartnerApi\Seller\ProductFeesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetMyFeesEstimateRequest extends BaseDto
{
    /**
     * @param  ?FeesEstimateRequest  $feesEstimateRequest A product, marketplace, and proposed price used to request estimated fees.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?FeesEstimateRequest $feesEstimateRequest = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
