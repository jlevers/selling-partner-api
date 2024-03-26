<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Points extends BaseDto
{
    protected static array $attributeMap = [
        'pointsNumber' => 'PointsNumber',
        'pointsMonetaryValue' => 'PointsMonetaryValue',
    ];

    /**
     * @param  ?int  $pointsNumber  The number of points.
     * @param  ?MoneyType  $pointsMonetaryValue
     */
    public function __construct(
        public readonly ?int $pointsNumber = null,
        public readonly ?MoneyType $pointsMonetaryValue = null,
    ) {
    }
}
