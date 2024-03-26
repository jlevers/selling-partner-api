<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RetrieveShippingLabelRequest extends BaseDto
{
    /**
     * @param  LabelSpecification  $labelSpecification  The label specification info.
     */
    public function __construct(
        public readonly LabelSpecification $labelSpecification,
    ) {
    }
}
