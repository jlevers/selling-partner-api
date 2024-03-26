<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TaxWithheldComponent extends BaseDto
{
    protected static array $attributeMap = [
        'taxCollectionModel' => 'TaxCollectionModel',
        'taxesWithheld' => 'TaxesWithheld',
    ];

    protected static array $complexArrayTypes = ['taxesWithheld' => [ChargeComponent::class]];

    /**
     * @param  ?string  $taxCollectionModel  The tax collection model applied to the item.
     *
     * Possible values:
     *
     * * MarketplaceFacilitator - Tax is withheld and remitted to the taxing authority by Amazon on behalf of the seller.
     *
     * * Standard - Tax is paid to the seller and not remitted to the taxing authority by Amazon.
     * @param  ChargeComponent[]|null  $taxesWithheld  A list of charge information on the seller's account.
     */
    public function __construct(
        public readonly ?string $taxCollectionModel = null,
        public readonly ?array $taxesWithheld = null,
    ) {
    }
}
