<?php

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ServiceFeeEvent extends BaseDto
{
    protected static array $attributeMap = [
        'amazonOrderId' => 'AmazonOrderId',
        'feeReason' => 'FeeReason',
        'feeList' => 'FeeList',
        'sellerSku' => 'SellerSKU',
        'fnSku' => 'FnSKU',
        'feeDescription' => 'FeeDescription',
        'asin' => 'ASIN',
    ];

    protected static array $complexArrayTypes = ['feeList' => [FeeComponent::class]];

    /**
     * @param  ?string  $amazonOrderId  An Amazon-defined identifier for an order.
     * @param  ?string  $feeReason  A short description of the service fee reason.
     * @param  FeeComponent[]|null  $feeList  A list of fee component information.
     * @param  ?string  $sellerSku  The seller SKU of the item. The seller SKU is qualified by the seller's seller ID, which is included with every call to the Selling Partner API.
     * @param  ?string  $fnSku  A unique identifier assigned by Amazon to products stored in and fulfilled from an Amazon fulfillment center.
     * @param  ?string  $feeDescription  A short description of the service fee event.
     * @param  ?string  $asin  The Amazon Standard Identification Number (ASIN) of the item.
     */
    public function __construct(
        public readonly ?string $amazonOrderId = null,
        public readonly ?string $feeReason = null,
        public readonly ?array $feeList = null,
        public readonly ?string $sellerSku = null,
        public readonly ?string $fnSku = null,
        public readonly ?string $feeDescription = null,
        public readonly ?string $asin = null,
    ) {
    }
}
