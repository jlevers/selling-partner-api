<?php

namespace SellingPartnerApi\Seller\ProductFeesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class IncludedFeeDetail extends BaseDto
{
    protected static array $attributeMap = [
        'feeType' => 'FeeType',
        'feeAmount' => 'FeeAmount',
        'finalFee' => 'FinalFee',
        'feePromotion' => 'FeePromotion',
        'taxAmount' => 'TaxAmount',
    ];

    /**
     * @param  string  $feeType  The type of fee charged to a seller.
     * @param  ?MoneyType  $feePromotion
     * @param  ?MoneyType  $taxAmount
     */
    public function __construct(
        public readonly string $feeType,
        public readonly MoneyType $feeAmount,
        public readonly MoneyType $finalFee,
        public readonly ?MoneyType $feePromotion = null,
        public readonly ?MoneyType $taxAmount = null,
    ) {
    }
}
