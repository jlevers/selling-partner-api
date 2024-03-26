<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TrialShipmentEvent extends BaseDto
{
    protected static array $attributeMap = [
        'amazonOrderId' => 'AmazonOrderId',
        'financialEventGroupId' => 'FinancialEventGroupId',
        'postedDate' => 'PostedDate',
        'sku' => 'SKU',
        'feeList' => 'FeeList',
    ];

    protected static array $complexArrayTypes = ['feeList' => [FeeComponent::class]];

    /**
     * @param  ?string  $amazonOrderId  An Amazon-defined identifier for an order.
     * @param  ?string  $financialEventGroupId  The identifier of the financial event group.
     * @param  ?DateTime  $postedDate
     * @param  ?string  $sku  The seller SKU of the item. The seller SKU is qualified by the seller's seller ID, which is included with every call to the Selling Partner API.
     * @param  FeeComponent[]|null  $feeList  A list of fee component information.
     */
    public function __construct(
        public readonly ?string $amazonOrderId = null,
        public readonly ?string $financialEventGroupId = null,
        public readonly ?\DateTime $postedDate = null,
        public readonly ?string $sku = null,
        public readonly ?array $feeList = null,
    ) {
    }
}
