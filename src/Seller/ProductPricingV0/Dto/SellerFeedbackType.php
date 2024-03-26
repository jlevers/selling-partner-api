<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SellerFeedbackType extends BaseDto
{
    protected static array $attributeMap = [
        'feedbackCount' => 'FeedbackCount',
        'sellerPositiveFeedbackRating' => 'SellerPositiveFeedbackRating',
    ];

    /**
     * @param  int  $feedbackCount  The number of ratings received about the seller.
     * @param  ?float  $sellerPositiveFeedbackRating  The percentage of positive feedback for the seller in the past 365 days.
     */
    public function __construct(
        public readonly int $feedbackCount,
        public readonly ?float $sellerPositiveFeedbackRating = null,
    ) {
    }
}
