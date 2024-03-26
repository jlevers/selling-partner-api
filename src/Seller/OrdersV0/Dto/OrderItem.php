<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderItem extends BaseDto
{
    protected static array $attributeMap = [
        'asin' => 'ASIN',
        'orderItemId' => 'OrderItemId',
        'quantityOrdered' => 'QuantityOrdered',
        'sellerSku' => 'SellerSKU',
        'associatedItems' => 'AssociatedItems',
        'title' => 'Title',
        'quantityShipped' => 'QuantityShipped',
        'productInfo' => 'ProductInfo',
        'pointsGranted' => 'PointsGranted',
        'itemPrice' => 'ItemPrice',
        'shippingPrice' => 'ShippingPrice',
        'itemTax' => 'ItemTax',
        'shippingTax' => 'ShippingTax',
        'shippingDiscount' => 'ShippingDiscount',
        'shippingDiscountTax' => 'ShippingDiscountTax',
        'promotionDiscount' => 'PromotionDiscount',
        'promotionDiscountTax' => 'PromotionDiscountTax',
        'promotionIds' => 'PromotionIds',
        'codFee' => 'CODFee',
        'codFeeDiscount' => 'CODFeeDiscount',
        'isGift' => 'IsGift',
        'conditionNote' => 'ConditionNote',
        'conditionId' => 'ConditionId',
        'conditionSubtypeId' => 'ConditionSubtypeId',
        'scheduledDeliveryStartDate' => 'ScheduledDeliveryStartDate',
        'scheduledDeliveryEndDate' => 'ScheduledDeliveryEndDate',
        'priceDesignation' => 'PriceDesignation',
        'taxCollection' => 'TaxCollection',
        'serialNumberRequired' => 'SerialNumberRequired',
        'isTransparency' => 'IsTransparency',
        'iossNumber' => 'IossNumber',
        'storeChainStoreId' => 'StoreChainStoreId',
        'deemedResellerCategory' => 'DeemedResellerCategory',
        'buyerInfo' => 'BuyerInfo',
        'buyerRequestedCancel' => 'BuyerRequestedCancel',
        'serialNumbers' => 'SerialNumbers',
        'substitutionPreferences' => 'SubstitutionPreferences',
        'measurement' => 'Measurement',
    ];

    protected static array $complexArrayTypes = ['associatedItems' => [AssociatedItem::class]];

    /**
     * @param  string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     * @param  string  $orderItemId  An Amazon-defined order item identifier.
     * @param  int  $quantityOrdered  The number of items in the order.
     * @param  ?string  $sellerSku  The seller stock keeping unit (SKU) of the item.
     * @param  AssociatedItem[]|null  $associatedItems  A list of associated items that a customer has purchased with a product. For example, a tire installation service purchased with tires.
     * @param  ?string  $title  The name of the item.
     * @param  ?int  $quantityShipped  The number of items shipped.
     * @param  ?ProductInfoDetail  $productInfo  Product information on the number of items.
     * @param  ?PointsGrantedDetail  $pointsGranted  The number of Amazon Points offered with the purchase of an item, and their monetary value.
     * @param  ?Money  $itemPrice  The monetary value of the order.
     * @param  ?Money  $shippingPrice  The monetary value of the order.
     * @param  ?Money  $itemTax  The monetary value of the order.
     * @param  ?Money  $shippingTax  The monetary value of the order.
     * @param  ?Money  $shippingDiscount  The monetary value of the order.
     * @param  ?Money  $shippingDiscountTax  The monetary value of the order.
     * @param  ?Money  $promotionDiscount  The monetary value of the order.
     * @param  ?Money  $promotionDiscountTax  The monetary value of the order.
     * @param  ?string[]  $promotionIds  A list of promotion identifiers provided by the seller when the promotions were created.
     * @param  ?Money  $codFee  The monetary value of the order.
     * @param  ?Money  $codFeeDiscount  The monetary value of the order.
     * @param  ?bool  $isGift  When true, the item is a gift.
     * @param  ?string  $conditionNote  The condition of the item as described by the seller.
     * @param  ?string  $conditionId  The condition of the item.
     *
     * Possible values: New, Used, Collectible, Refurbished, Preorder, Club.
     * @param  ?string  $conditionSubtypeId  The subcondition of the item.
     *
     * Possible values: New, Mint, Very Good, Good, Acceptable, Poor, Club, OEM, Warranty, Refurbished Warranty, Refurbished, Open Box, Any, Other.
     * @param  ?string  $scheduledDeliveryStartDate  The start date of the scheduled delivery window in the time zone of the order destination. In ISO 8601 date time format.
     * @param  ?string  $scheduledDeliveryEndDate  The end date of the scheduled delivery window in the time zone of the order destination. In ISO 8601 date time format.
     * @param  ?string  $priceDesignation  Indicates that the selling price is a special price that is available only for Amazon Business orders. For more information about the Amazon Business Seller Program, see the [Amazon Business website](https://www.amazon.com/b2b/info/amazon-business).
     *
     * Possible values: BusinessPrice - A special price that is available only for Amazon Business orders.
     * @param  ?TaxCollection  $taxCollection  Information about withheld taxes.
     * @param  ?bool  $serialNumberRequired  When true, the product type for this item has a serial number.
     *
     * Returned only for Amazon Easy Ship orders.
     * @param  ?bool  $isTransparency  When true, the ASIN is enrolled in Transparency and the Transparency serial number that needs to be submitted can be determined by the following:
     *
     * **1D or 2D Barcode:** This has a **T** logo. Submit either the 29-character alpha-numeric identifier beginning with **AZ** or **ZA**, or the 38-character Serialized Global Trade Item Number (SGTIN).
     * **2D Barcode SN:** Submit the 7- to 20-character serial number barcode, which likely has the prefix **SN**. The serial number will be applied to the same side of the packaging as the GTIN (UPC/EAN/ISBN) barcode.
     * **QR code SN:** Submit the URL that the QR code generates.
     * @param  ?string  $iossNumber  The IOSS number for the marketplace. Sellers shipping to the European Union (EU) from outside of the EU must provide this IOSS number to their carrier when Amazon has collected the VAT on the sale.
     * @param  ?string  $storeChainStoreId  The store chain store identifier. Linked to a specific store in a store chain.
     * @param  ?string  $deemedResellerCategory  The category of deemed reseller. This applies to selling partners that are not based in the EU and is used to help them meet the VAT Deemed Reseller tax laws in the EU and UK.
     * @param  ?ItemBuyerInfo  $buyerInfo  A single item's buyer information.
     * @param  ?BuyerRequestedCancel  $buyerRequestedCancel  Information about whether or not a buyer requested cancellation.
     * @param  ?string[]  $serialNumbers  A list of serial numbers for electronic products that are shipped to customers. Returned for FBA orders only.
     * @param  ?SubstitutionPreferences  $substitutionPreferences
     * @param  ?Measurement  $measurement
     */
    public function __construct(
        public readonly string $asin,
        public readonly string $orderItemId,
        public readonly int $quantityOrdered,
        public readonly ?string $sellerSku = null,
        public readonly ?array $associatedItems = null,
        public readonly ?string $title = null,
        public readonly ?int $quantityShipped = null,
        public readonly ?ProductInfoDetail $productInfo = null,
        public readonly ?PointsGrantedDetail $pointsGranted = null,
        public readonly ?Money $itemPrice = null,
        public readonly ?Money $shippingPrice = null,
        public readonly ?Money $itemTax = null,
        public readonly ?Money $shippingTax = null,
        public readonly ?Money $shippingDiscount = null,
        public readonly ?Money $shippingDiscountTax = null,
        public readonly ?Money $promotionDiscount = null,
        public readonly ?Money $promotionDiscountTax = null,
        public readonly ?array $promotionIds = null,
        public readonly ?Money $codFee = null,
        public readonly ?Money $codFeeDiscount = null,
        public readonly ?bool $isGift = null,
        public readonly ?string $conditionNote = null,
        public readonly ?string $conditionId = null,
        public readonly ?string $conditionSubtypeId = null,
        public readonly ?string $scheduledDeliveryStartDate = null,
        public readonly ?string $scheduledDeliveryEndDate = null,
        public readonly ?string $priceDesignation = null,
        public readonly ?TaxCollection $taxCollection = null,
        public readonly ?bool $serialNumberRequired = null,
        public readonly ?bool $isTransparency = null,
        public readonly ?string $iossNumber = null,
        public readonly ?string $storeChainStoreId = null,
        public readonly ?string $deemedResellerCategory = null,
        public readonly ?ItemBuyerInfo $buyerInfo = null,
        public readonly ?BuyerRequestedCancel $buyerRequestedCancel = null,
        public readonly ?array $serialNumbers = null,
        public readonly ?SubstitutionPreferences $substitutionPreferences = null,
        public readonly ?Measurement $measurement = null,
    ) {
    }
}
