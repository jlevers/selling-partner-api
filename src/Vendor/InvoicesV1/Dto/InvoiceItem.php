<?php

namespace SellingPartnerApi\Vendor\InvoicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InvoiceItem extends BaseDto
{
    protected static array $complexArrayTypes = [
        'taxDetails' => [TaxDetails::class],
        'chargeDetails' => [ChargeDetails::class],
        'allowanceDetails' => [AllowanceDetails::class],
    ];

    /**
     * @param  int  $itemSequenceNumber Unique number related to this line item.
     * @param  string  $amazonProductIdentifier Amazon Standard Identification Number (ASIN) of an item.
     * @param  string  $vendorProductIdentifier The vendor selected product identifier of the item. Should be the same as was provided in the purchase order.
     * @param  ItemQuantity  $invoicedQuantity Details of quantity.
     * @param  Money  $netCost An amount of money, including units in the form of currency.
     * @param  string  $purchaseOrderNumber The Amazon purchase order number for this invoiced line item. Formatting Notes: 8-character alpha-numeric code. This value is mandatory only when invoiceType is Invoice, and is not required when invoiceType is CreditNote.
     * @param  string  $hsnCode HSN Tax code. The HSN number cannot contain alphabets.
     * @param  CreditNoteDetails  $creditNoteDetails References required in order to process a credit note. This information is required only if InvoiceType is CreditNote.
     * @param  TaxDetails[]  $taxDetails Individual tax details per line item.
     * @param  ChargeDetails[]  $chargeDetails Individual charge details per line item.
     * @param  AllowanceDetails[]  $allowanceDetails Individual allowance details per line item.
     */
    public function __construct(
        public readonly int $itemSequenceNumber,
        public readonly ?string $amazonProductIdentifier = null,
        public readonly ?string $vendorProductIdentifier = null,
        public readonly ?ItemQuantity $invoicedQuantity = null,
        public readonly ?Money $netCost = null,
        public readonly ?string $purchaseOrderNumber = null,
        public readonly ?string $hsnCode = null,
        public readonly ?CreditNoteDetails $creditNoteDetails = null,
        public readonly ?array $taxDetails = null,
        public readonly ?array $chargeDetails = null,
        public readonly ?array $allowanceDetails = null,
    ) {
    }
}
