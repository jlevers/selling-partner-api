<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FeeComponent extends BaseDto
{
    protected static array $attributeMap = ['feeType' => 'FeeType', 'feeAmount' => 'FeeAmount'];

    /**
     * @param  ?string  $feeType  The type of fee. For more information about Selling on Amazon fees, see [Selling on Amazon Fee Schedule](https://sellercentral.amazon.com/gp/help/200336920) on Seller Central. For more information about Fulfillment by Amazon fees, see [FBA features, services and fees](https://sellercentral.amazon.com/gp/help/201074400) on Seller Central.
     * @param  ?Currency  $feeAmount  A currency type and amount.
     */
    public function __construct(
        public readonly ?string $feeType = null,
        public readonly ?Currency $feeAmount = null,
    ) {
    }
}
