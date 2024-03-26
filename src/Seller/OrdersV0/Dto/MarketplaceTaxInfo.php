<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class MarketplaceTaxInfo extends BaseDto
{
    protected static array $attributeMap = ['taxClassifications' => 'TaxClassifications'];

    protected static array $complexArrayTypes = ['taxClassifications' => [TaxClassification::class]];

    /**
     * @param  TaxClassification[]|null  $taxClassifications  A list of tax classifications that apply to the order.
     */
    public function __construct(
        public readonly ?array $taxClassifications = null,
    ) {
    }
}
