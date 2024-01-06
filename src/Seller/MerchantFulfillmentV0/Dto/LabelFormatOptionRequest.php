<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class LabelFormatOptionRequest extends BaseDto
{
    /**
     * @param  bool  $includePackingSlipWithLabel When true, include a packing slip with the label.
     */
    public function __construct(
        public readonly bool $includePackingSlipWithLabel,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
