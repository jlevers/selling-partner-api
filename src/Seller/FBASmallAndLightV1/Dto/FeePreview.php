<?php

namespace SellingPartnerApi\Seller\FBASmallAndLightV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FeePreview extends BaseDto
{
    protected static array $complexArrayTypes = ['feeBreakdown' => [FeeLineItem::class], 'errors' => [Error::class]];

    /**
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN) value used to identify the item.
     * @param  ?MoneyType  $price
     * @param  FeeLineItem[]|null  $feeBreakdown  A list of the Small and Light fees for the item.
     * @param  ?MoneyType  $totalFees
     * @param  Error[]|null  $errors
     */
    public function __construct(
        public readonly ?string $asin = null,
        public readonly ?MoneyType $price = null,
        public readonly ?array $feeBreakdown = null,
        public readonly ?MoneyType $totalFees = null,
        public readonly ?array $errors = null,
    ) {
    }
}
