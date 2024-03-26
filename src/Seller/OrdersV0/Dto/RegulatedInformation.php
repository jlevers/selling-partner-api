<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RegulatedInformation extends BaseDto
{
    protected static array $attributeMap = ['fields' => 'Fields'];

    protected static array $complexArrayTypes = ['fields' => [RegulatedInformationField::class]];

    /**
     * @param  RegulatedInformationField[]  $fields  A list of regulated information fields as collected from the regulatory form.
     */
    public function __construct(
        public readonly array $fields,
    ) {
    }
}
