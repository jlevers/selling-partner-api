<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShipmentInvoicingV0\Dto;

use SellingPartnerApi\Dto;

final class MarketplaceTaxInfo extends Dto
{
    protected static array $attributeMap = [
        'companyLegalName' => 'CompanyLegalName',
        'taxingRegion' => 'TaxingRegion',
        'taxClassifications' => 'TaxClassifications',
    ];

    protected static array $complexArrayTypes = ['taxClassifications' => [TaxClassification::class]];

    /**
     * @param  ?string  $companyLegalName  The legal name of the company.
     * @param  ?string  $taxingRegion  The country or region imposing the tax.
     * @param  TaxClassification[]|null  $taxClassifications  The list of tax classifications.
     */
    public function __construct(
        public readonly ?string $companyLegalName = null,
        public readonly ?string $taxingRegion = null,
        public readonly ?array $taxClassifications = null,
    ) {
    }
}