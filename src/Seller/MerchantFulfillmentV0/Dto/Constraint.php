<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Constraint extends BaseDto
{
    protected static array $attributeMap = [
        'validationString' => 'ValidationString',
        'validationRegEx' => 'ValidationRegEx',
    ];

    /**
     * @param  string  $validationString  A validation string.
     * @param  ?string  $validationRegEx  A regular expression.
     */
    public function __construct(
        public readonly string $validationString,
        public readonly ?string $validationRegEx = null,
    ) {
    }
}
