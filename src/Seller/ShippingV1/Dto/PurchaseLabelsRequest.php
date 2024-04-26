<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use SellingPartnerApi\Dto;

final class PurchaseLabelsRequest extends Dto
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
