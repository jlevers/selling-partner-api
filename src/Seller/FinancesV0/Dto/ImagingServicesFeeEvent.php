<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class ImagingServicesFeeEvent extends Dto
{
    protected static array $attributeMap = [
        'imagingRequestBillingItemId' => 'ImagingRequestBillingItemID',
        'asin' => 'ASIN',
        'postedDate' => 'PostedDate',
        'feeList' => 'FeeList',
    ];

    protected static array $complexArrayTypes = ['feeList' => FeeComponent::class];

    /**
     * @param  ?string  $imagingRequestBillingItemId  The identifier for the imaging services request.
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN) of the item for which the imaging service was requested.
     * @param  ?\DateTimeInterface  $postedDate  Fields with a schema type of date are in ISO 8601 date time format (for example GroupBeginDate).
     * @param  FeeComponent[]|null  $feeList  A list of fee component information.
     */
    public function __construct(
        public ?string $imagingRequestBillingItemId = null,
        public ?string $asin = null,
        public ?\DateTimeInterface $postedDate = null,
        public ?array $feeList = null,
    ) {}
}
