<?php

namespace SellingPartnerApi\Seller\ProductFeesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FeesEstimateByIdRequest extends BaseDto
{
    protected static array $attributeMap = [
        'idType' => 'IdType',
        'idValue' => 'IdValue',
        'feesEstimateRequest' => 'FeesEstimateRequest',
    ];

    /**
     * @param  string  $idType  The type of product identifier used in a `FeesEstimateByIdRequest`.
     * @param  string  $idValue  The item identifier.
     * @param  ?FeesEstimateRequest  $feesEstimateRequest  A product, marketplace, and proposed price used to request estimated fees.
     */
    public function __construct(
        public readonly string $idType,
        public readonly string $idValue,
        public readonly ?FeesEstimateRequest $feesEstimateRequest = null,
    ) {
    }
}
