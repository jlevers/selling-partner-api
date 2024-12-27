<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class RetrochargeEvent extends Dto
{
    protected static array $attributeMap = [
        'retrochargeEventType' => 'RetrochargeEventType',
        'amazonOrderId' => 'AmazonOrderId',
        'postedDate' => 'PostedDate',
        'baseTax' => 'BaseTax',
        'shippingTax' => 'ShippingTax',
        'marketplaceName' => 'MarketplaceName',
        'retrochargeTaxWithheldList' => 'RetrochargeTaxWithheldList',
    ];

    protected static array $complexArrayTypes = ['retrochargeTaxWithheldList' => TaxWithheldComponent::class];

    /**
     * @param  ?string  $retrochargeEventType  The type of event.
     *
     * Possible values:
     *
     * * Retrocharge
     *
     * * RetrochargeReversal
     * @param  ?string  $amazonOrderId  An Amazon-defined identifier for an order.
     * @param  ?\DateTimeInterface  $postedDate  Fields with a schema type of date are in ISO 8601 date time format (for example GroupBeginDate).
     * @param  ?Currency  $baseTax  A currency type and amount.
     * @param  ?Currency  $shippingTax  A currency type and amount.
     * @param  ?string  $marketplaceName  The name of the marketplace where the retrocharge event occurred.
     * @param  TaxWithheldComponent[]|null  $retrochargeTaxWithheldList  A list of information about taxes withheld.
     */
    public function __construct(
        public ?string $retrochargeEventType = null,
        public ?string $amazonOrderId = null,
        public ?\DateTimeInterface $postedDate = null,
        public ?Currency $baseTax = null,
        public ?Currency $shippingTax = null,
        public ?string $marketplaceName = null,
        public ?array $retrochargeTaxWithheldList = null,
    ) {}
}
