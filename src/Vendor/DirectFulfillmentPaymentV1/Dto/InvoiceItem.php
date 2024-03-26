<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InvoiceItem extends BaseDto
{
    protected static array $complexArrayTypes = [
        'taxDetails' => [TaxDetail::class],
        'chargeDetails' => [ChargeDetails::class],
    ];

    /**
     * @param  string  $itemSequenceNumber  Numbering of the item on the purchase order. The first item will be 1, the second 2, and so on.
     * @param  ItemQuantity  $invoicedQuantity  Details of item quantity.
     * @param  Money  $netCost  An amount of money, including units in the form of currency.
     * @param  string  $purchaseOrderNumber  The purchase order number for this order. Formatting Notes: 8-character alpha-numeric code.
     * @param  ?string  $buyerProductIdentifier  Buyer's standard identification number (ASIN) of an item.
     * @param  ?string  $vendorProductIdentifier  The vendor selected product identification of the item.
     * @param  ?string  $vendorOrderNumber  The vendor's order number for this order.
     * @param  ?string  $hsnCode  Harmonized System of Nomenclature (HSN) tax code. The HSN number cannot contain alphabets.
     * @param  TaxDetail[]  $taxDetails  Individual tax details per line item.
     * @param  ChargeDetails[]  $chargeDetails  Total charge amount details for all line items.
     */
    public function __construct(
        public readonly string $itemSequenceNumber,
        public readonly ItemQuantity $invoicedQuantity,
        public readonly Money $netCost,
        public readonly string $purchaseOrderNumber,
        public readonly ?string $buyerProductIdentifier = null,
        public readonly ?string $vendorProductIdentifier = null,
        public readonly ?string $vendorOrderNumber = null,
        public readonly ?string $hsnCode = null,
        public readonly ?array $taxDetails = null,
        public readonly ?array $chargeDetails = null,
    ) {
    }
}
