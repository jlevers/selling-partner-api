<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Dto;

use SellingPartnerApi\Dto;

final class InvoiceDetail extends Dto
{
    protected static array $complexArrayTypes = [
        'items' => InvoiceItem::class,
        'taxTotals' => TaxDetail::class,
        'additionalDetails' => AdditionalDetails::class,
        'chargeDetails' => ChargeDetails::class,
    ];

    /**
     * @param  string  $invoiceNumber  The unique invoice number.
     * @param  \DateTimeInterface  $invoiceDate  Invoice date.
     * @param  PartyIdentification  $remitToParty  Name, address and tax details of a party.
     * @param  PartyIdentification  $shipFromParty  Name, address and tax details of a party.
     * @param  Money  $invoiceTotal  An amount of money, including units in the form of currency.
     * @param  InvoiceItem[]  $items  Provides the details of the items in this invoice.
     * @param  ?string  $referenceNumber  An additional unique reference number used for regulatory or other purposes.
     * @param  ?PartyIdentification  $billToParty  Name, address and tax details of a party.
     * @param  ?string  $shipToCountryCode  Ship-to country code.
     * @param  ?string  $paymentTermsCode  The payment terms for the invoice.
     * @param  TaxDetail[]|null  $taxTotals  Individual tax details per line item.
     * @param  AdditionalDetails[]|null  $additionalDetails  Additional details provided by the selling party, for tax-related or other purposes.
     * @param  ChargeDetails[]|null  $chargeDetails  Total charge amount details for all line items.
     */
    public function __construct(
        public string $invoiceNumber,
        public \DateTimeInterface $invoiceDate,
        public PartyIdentification $remitToParty,
        public PartyIdentification $shipFromParty,
        public Money $invoiceTotal,
        public array $items,
        public ?string $referenceNumber = null,
        public ?PartyIdentification $billToParty = null,
        public ?string $shipToCountryCode = null,
        public ?string $paymentTermsCode = null,
        public ?array $taxTotals = null,
        public ?array $additionalDetails = null,
        public ?array $chargeDetails = null,
    ) {}
}
