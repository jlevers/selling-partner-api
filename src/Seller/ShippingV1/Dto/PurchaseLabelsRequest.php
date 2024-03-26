<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PurchaseLabelsRequest extends BaseDto
{
    /**
     * @param  string  $rateId  An identifier for the rating.
     * @param  LabelSpecification  $labelSpecification  The label specification info.
     */
    public function __construct(
        public readonly string $rateId,
        public readonly LabelSpecification $labelSpecification,
    ) {
    }
}
