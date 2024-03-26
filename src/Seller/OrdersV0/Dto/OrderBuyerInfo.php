<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderBuyerInfo extends BaseDto
{
    protected static array $attributeMap = [
        'amazonOrderId' => 'AmazonOrderId',
        'buyerEmail' => 'BuyerEmail',
        'buyerName' => 'BuyerName',
        'buyerCounty' => 'BuyerCounty',
        'buyerTaxInfo' => 'BuyerTaxInfo',
        'purchaseOrderNumber' => 'PurchaseOrderNumber',
    ];

    /**
     * @param  string  $amazonOrderId  An Amazon-defined order identifier, in 3-7-7 format.
     * @param  ?string  $buyerEmail  The anonymized email address of the buyer.
     * @param  ?string  $buyerName  The buyer name or the recipient name.
     * @param  ?string  $buyerCounty  The county of the buyer.
     * @param  ?BuyerTaxInfo  $buyerTaxInfo  Tax information about the buyer.
     * @param  ?string  $purchaseOrderNumber  The purchase order (PO) number entered by the buyer at checkout. Returned only for orders where the buyer entered a PO number at checkout.
     */
    public function __construct(
        public readonly string $amazonOrderId,
        public readonly ?string $buyerEmail = null,
        public readonly ?string $buyerName = null,
        public readonly ?string $buyerCounty = null,
        public readonly ?BuyerTaxInfo $buyerTaxInfo = null,
        public readonly ?string $purchaseOrderNumber = null,
    ) {
    }
}
