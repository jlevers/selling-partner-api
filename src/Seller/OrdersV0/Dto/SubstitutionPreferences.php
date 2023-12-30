<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SubstitutionPreferences extends BaseDto
{
    protected static array $complexArrayTypes = ['substitutionOptions' => [SubstitutionOption::class]];

    /**
     * @param  string  $substitutionType The type of substitution that these preferences represent.
     * @param  SubstitutionOption[]  $substitutionOptions A collection of substitution options.
     */
    public function __construct(
        public readonly string $substitutionType,
        public readonly ?array $substitutionOptions = null,
    ) {
    }
}