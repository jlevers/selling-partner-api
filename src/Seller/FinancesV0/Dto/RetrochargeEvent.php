<?php

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

    protected static array $complexArrayTypes = ['retrochargeTaxWithheldList' => [TaxWithheldComponent::class]];

    /**
     * @param  ?string  $retrochargeEventType  The type of event.
     *
     * Possible values:
     *
     * * Retrocharge
     *
     * * RetrochargeReversal
     * @param  ?string  $amazonOrderId  An Amazon-defined identifier for an order.
     * @param  ?\DateTimeInterface  $postedDate
     * @param  ?Currency  $baseTax  A currency type and amount.
     * @param  ?Currency  $shippingTax  A currency type and amount.
     * @param  ?string  $marketplaceName  The name of the marketplace where the retrocharge event occurred.
     * @param  TaxWithheldComponent[]|null  $retrochargeTaxWithheldList  A list of information about taxes withheld.
     */
    public function __construct(
        public readonly ?string $retrochargeEventType = null,
        public readonly ?string $amazonOrderId = null,
        public readonly ?\DateTimeInterface $postedDate = null,
        public readonly ?Currency $baseTax = null,
        public readonly ?Currency $shippingTax = null,
        public readonly ?string $marketplaceName = null,
        public readonly ?array $retrochargeTaxWithheldList = null,
    ) {
    }
}
