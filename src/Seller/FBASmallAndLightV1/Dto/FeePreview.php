<?php

namespace SellingPartnerApi\Seller\FBASmallAndLightV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FeePreview extends BaseDto
{
    protected static array $complexArrayTypes = ['feeBreakdown' => [FeeLineItem::class], 'errors' => [Error::class]];

    /**
     * @param  string  $asin The Amazon Standard Identification Number (ASIN) value used to identify the item.
     * @param  FeeLineItem[]  $feeBreakdown A list of the Small and Light fees for the item.
     * @param  Error[]  $errors One or more unexpected errors occurred during the getSmallAndLightFeePreview operation.
     */
    public function __construct(
        public readonly string $asin,
        public readonly MoneyType $price,
        public readonly array $feeBreakdown,
        public readonly MoneyType $totalFees,
        public readonly array $errors,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
