<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SellerFeedbackType extends BaseDto
{
    /**
     * @param  int  $feedbackCount The number of ratings received about the seller.
     * @param  ?float  $sellerPositiveFeedbackRating The percentage of positive feedback for the seller in the past 365 days.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly int $feedbackCount,
        public readonly ?float $sellerPositiveFeedbackRating = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
