<?php

namespace SellingPartnerApi\Vendor\InvoicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Invoice extends BaseDto
{
    protected static array $complexArrayTypes = [
        'taxDetails' => [TaxDetails::class],
        'additionalDetails' => [AdditionalDetails::class],
        'chargeDetails' => [ChargeDetails::class],
        'allowanceDetails' => [AllowanceDetails::class],
        'items' => [InvoiceItem::class],
    ];

    /**
     * @param  string  $invoiceType Identifies the type of invoice.
     * @param  string  $id Unique number relating to the charges defined in this document. This will be invoice number if the document type is Invoice or CreditNote number if the document type is Credit Note. Failure to provide this reference will result in a rejection.
     * @param  string  $referenceNumber An additional unique reference number used for regulatory or other purposes.
     * @param  string  $date Defines a date and time according to ISO8601.
     * @param  PaymentTerms  $paymentTerms Terms of the payment for the invoice. The basis of the payment terms is the invoice date.
     * @param  Money  $invoiceTotal An amount of money, including units in the form of currency.
     * @param  TaxDetails[]  $taxDetails Total tax amount details for all line items.
     * @param  AdditionalDetails[]  $additionalDetails Additional details provided by the selling party, for tax related or other purposes.
     * @param  ChargeDetails[]  $chargeDetails Total charge amount details for all line items.
     * @param  AllowanceDetails[]  $allowanceDetails Total allowance amount details for all line items.
     * @param  InvoiceItem[]  $items The list of invoice items.
     */
    public function __construct(
        public readonly string $invoiceType,
        public readonly string $id,
        public readonly ?string $referenceNumber = null,
        public readonly ?string $date = null,
        public readonly ?PartyIdentification $remitToParty = null,
        public readonly ?PartyIdentification $shipToParty = null,
        public readonly ?PartyIdentification $shipFromParty = null,
        public readonly ?PartyIdentification $billToParty = null,
        public readonly ?PaymentTerms $paymentTerms = null,
        public readonly ?Money $invoiceTotal = null,
        public readonly ?array $taxDetails = null,
        public readonly ?array $additionalDetails = null,
        public readonly ?array $chargeDetails = null,
        public readonly ?array $allowanceDetails = null,
        public readonly ?array $items = null,
    ) {
    }
}
