<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RemovalShipmentItemAdjustment extends BaseDto
{
    protected static array $attributeMap = [
        'removalShipmentItemId' => 'RemovalShipmentItemId',
        'taxCollectionModel' => 'TaxCollectionModel',
        'fulfillmentNetworkSku' => 'FulfillmentNetworkSKU',
        'adjustedQuantity' => 'AdjustedQuantity',
        'revenueAdjustment' => 'RevenueAdjustment',
        'taxAmountAdjustment' => 'TaxAmountAdjustment',
        'taxWithheldAdjustment' => 'TaxWithheldAdjustment',
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
     * @param  ?int  $adjustedQuantity  Adjusted quantity of removal shipmentItemAdjustment items.
     * @param  ?Currency  $revenueAdjustment  A currency type and amount.
     * @param  ?Currency  $taxAmountAdjustment  A currency type and amount.
     * @param  ?Currency  $taxWithheldAdjustment  A currency type and amount.
     */
    public function __construct(
        public readonly ?string $removalShipmentItemId = null,
        public readonly ?string $taxCollectionModel = null,
        public readonly ?string $fulfillmentNetworkSku = null,
        public readonly ?int $adjustedQuantity = null,
        public readonly ?Currency $revenueAdjustment = null,
        public readonly ?Currency $taxAmountAdjustment = null,
        public readonly ?Currency $taxWithheldAdjustment = null,
    ) {
    }
}
