<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FbaLiquidationEvent extends BaseDto
{
    protected static array $attributeMap = [
        'postedDate' => 'PostedDate',
        'originalRemovalOrderId' => 'OriginalRemovalOrderId',
        'liquidationProceedsAmount' => 'LiquidationProceedsAmount',
        'liquidationFeeAmount' => 'LiquidationFeeAmount',
    ];

    /**
     * @param  ?DateTime  $postedDate
     * @param  ?string  $originalRemovalOrderId  The identifier for the original removal order.
     * @param  ?Currency  $liquidationProceedsAmount  A currency type and amount.
     * @param  ?Currency  $liquidationFeeAmount  A currency type and amount.
     */
    public function __construct(
        public readonly ?\DateTime $postedDate = null,
        public readonly ?string $originalRemovalOrderId = null,
        public readonly ?Currency $liquidationProceedsAmount = null,
        public readonly ?Currency $liquidationFeeAmount = null,
    ) {
    }
}
