<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Dto;

use SellingPartnerApi\Dto;

final class InvoiceDetail extends Dto
{
    protected static array $complexArrayTypes = [
        'items' => [InvoiceItem::class],
        'taxTotals' => [TaxDetail::class],
        'additionalDetails' => [AdditionalDetails::class],
        'chargeDetails' => [ChargeDetails::class],
    ];

    /**
     * @param  string  $invoiceNumber  The unique invoice number.
     * @param  \DateTimeInterface  $invoiceDate  Invoice date.
     * @param  Money  $invoiceTotal  An amount of money, including units in the form of currency.
     * @param  InvoiceItem[]  $items  Provides the details of the items in this invoice.
     * @param  ?string  $referenceNumber  An additional unique reference number used for regulatory or other purposes.
     * @param  ?PartyIdentification  $billToParty
     * @param  ?string  $shipToCountryCode  Ship-to country code.
     * @param  ?string  $paymentTermsCode  The payment terms for the invoice.
     * @param  TaxDetail[]|null  $taxTotals  Individual tax details per line item.
     * @param  AdditionalDetails[]|null  $additionalDetails  Additional details provided by the selling party, for tax-related or other purposes.
     * @param  ChargeDetails[]|null  $chargeDetails  Total charge amount details for all line items.
     */
    public function __construct(
        public readonly string $invoiceNumber,
        public readonly \DateTimeInterface $invoiceDate,
        public readonly PartyIdentification $remitToParty,
        public readonly PartyIdentification $shipFromParty,
        public readonly Money $invoiceTotal,
        public readonly array $items,
        public readonly ?string $referenceNumber = null,
        public readonly ?PartyIdentification $billToParty = null,
        public readonly ?string $shipToCountryCode = null,
        public readonly ?string $paymentTermsCode = null,
        public readonly ?array $taxTotals = null,
        public readonly ?array $additionalDetails = null,
        public readonly ?array $chargeDetails = null,
    ) {
    }
}
