<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\InvoicesV20240619\Dto;

use SellingPartnerApi\Dto;

final class InvoicesAttributes extends Dto
{
    protected static array $complexArrayTypes = [
        'invoiceStatusOptions' => AttributeOption::class,
        'invoiceTypeOptions' => AttributeOption::class,
        'transactionIdentifierNameOptions' => AttributeOption::class,
        'transactionTypeOptions' => AttributeOption::class,
    ];

    /**
     * @param  AttributeOption[]|null  $invoiceStatusOptions  A list of all the options that are available for the invoice status attribute.
     * @param  AttributeOption[]|null  $invoiceTypeOptions  A list of all the options that are available for the invoice type attribute.
     * @param  AttributeOption[]|null  $transactionIdentifierNameOptions  A list of all the options that are available for the transaction identifier name attribute.
     * @param  AttributeOption[]|null  $transactionTypeOptions  A list of all the options that are available for the transaction type attribute.
     */
    public function __construct(
        public readonly ?array $invoiceStatusOptions = null,
        public readonly ?array $invoiceTypeOptions = null,
        public readonly ?array $transactionIdentifierNameOptions = null,
        public readonly ?array $transactionTypeOptions = null,
    ) {}
}
