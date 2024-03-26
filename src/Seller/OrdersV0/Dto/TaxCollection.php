<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TaxCollection extends BaseDto
{
    protected static array $attributeMap = ['model' => 'Model', 'responsibleParty' => 'ResponsibleParty'];

    /**
     * @param  ?string  $model  The tax collection model applied to the item.
     * @param  ?string  $responsibleParty  The party responsible for withholding the taxes and remitting them to the taxing authority.
     */
    public function __construct(
        public readonly ?string $model = null,
        public readonly ?string $responsibleParty = null,
    ) {
    }
}
