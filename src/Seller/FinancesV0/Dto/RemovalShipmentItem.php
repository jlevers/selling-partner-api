<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RemovalShipmentItem extends BaseDto
{
    protected static array $attributeMap = [
        'removalShipmentItemId' => 'RemovalShipmentItemId',
        'taxCollectionModel' => 'TaxCollectionModel',
        'fulfillmentNetworkSku' => 'FulfillmentNetworkSKU',
        'quantity' => 'Quantity',
        'revenue' => 'Revenue',
        'feeAmount' => 'FeeAmount',
        'taxAmount' => 'TaxAmount',
        'taxWithheld' => 'TaxWithheld',
    ];

    /**
     * @param  ?string  $removalShipmentItemId  An identifier for an item in a removal shipment.
     * @param  ?string  $taxCollectionModel  The tax collection model applied to the item.
     *
     * Possible values:
     *
     * * MarketplaceFacilitator - Tax is withheld and remitted to the taxing authority by Amazon on behalf of the seller.
     *
     * * Standard - Tax is paid to the seller and not remitted to the taxing authority by Amazon.
     * @param  ?string  $fulfillmentNetworkSku  The Amazon fulfillment network SKU for the item.
     * @param  ?int  $quantity  The quantity of the item.
     * @param  ?Currency  $revenue  A currency type and amount.
     * @param  ?Currency  $feeAmount  A currency type and amount.
     * @param  ?Currency  $taxAmount  A currency type and amount.
     * @param  ?Currency  $taxWithheld  A currency type and amount.
     */
    public function __construct(
        public readonly ?string $removalShipmentItemId = null,
        public readonly ?string $taxCollectionModel = null,
        public readonly ?string $fulfillmentNetworkSku = null,
        public readonly ?int $quantity = null,
        public readonly ?Currency $revenue = null,
        public readonly ?Currency $feeAmount = null,
        public readonly ?Currency $taxAmount = null,
        public readonly ?Currency $taxWithheld = null,
    ) {
    }
}
