<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SellersV1\Dto;

use SellingPartnerApi\Dto;

final class Business extends Dto
{
    /**
     * @param  string  $name  The registered business name.
     * @param  Address  $registeredBusinessAddress  Represents an address
     * @param  ?string  $companyRegistrationNumber  The seller's company registration number, if applicable. This field will be absent for individual sellers and sole proprietorships.
     * @param  ?string  $companyTaxIdentificationNumber  The seller's company tax identification number, if applicable. This field will be present for certain business types only, such as sole proprietorships.
     * @param  ?string  $nonLatinName  The non-Latin script version of the registered business name, if applicable.
     */
    public function __construct(
        public string $name,
        public Address $registeredBusinessAddress,
        public ?string $companyRegistrationNumber = null,
        public ?string $companyTaxIdentificationNumber = null,
        public ?string $nonLatinName = null,
    ) {}
}
