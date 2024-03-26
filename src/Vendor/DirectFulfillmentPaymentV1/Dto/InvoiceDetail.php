<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InvoiceDetail extends BaseDto
{
    protected static array $complexArrayTypes = [
        'taxTotals' => [TaxDetail::class],
        'additionalDetails' => [AdditionalDetails::class],
        'chargeDetails' => [ChargeDetails::class],
        'items' => [InvoiceItem::class],
    ];

    /**
     * @param  string  $invoiceNumber  The unique invoice number.
     * @param  DateTime  $invoiceDate  Invoice date.
     * @param  Money  $invoiceTotal  An amount of money, including units in the form of currency.
     * @param  ?string  $referenceNumber  An additional unique reference number used for regulatory or other purposes.
     * @param  ?PartyIdentification  $billToParty
     * @param  ?string  $shipToCountryCode  Ship-to country code.
     * @param  ?string  $paymentTermsCode  The payment terms for the invoice.
     * @param  TaxDetail[]  $taxTotals  Individual tax details per line item.
     * @param  AdditionalDetails[]  $additionalDetails  Additional details provided by the selling party, for tax-related or other purposes.
     * @param  ChargeDetails[]  $chargeDetails  Total charge amount details for all line items.
     * @param  InvoiceItem[]  $items  Provides the details of the items in this invoice.
     */
    public function __construct(
        public readonly string $invoiceNumber,
        public readonly \DateTime $invoiceDate,
        public readonly PartyIdentification $remitToParty,
        public readonly PartyIdentification $shipFromParty,
        public readonly Money $invoiceTotal,
        public readonly ?string $referenceNumber = null,
        public readonly ?PartyIdentification $billToParty = null,
        public readonly ?string $shipToCountryCode = null,
        public readonly ?string $paymentTermsCode = null,
        public readonly ?array $taxTotals = null,
        public readonly ?array $additionalDetails = null,
        public readonly ?array $chargeDetails = null,
        public readonly ?array $items = null,
    ) {
    }
}
