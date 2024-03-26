<?php

namespace SellingPartnerApi\Seller\ProductFeesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FeesEstimateIdentifier extends BaseDto
{
    protected static array $attributeMap = [
        'marketplaceId' => 'MarketplaceId',
        'sellerId' => 'SellerId',
        'idType' => 'IdType',
        'idValue' => 'IdValue',
        'isAmazonFulfilled' => 'IsAmazonFulfilled',
        'priceToEstimateFees' => 'PriceToEstimateFees',
        'sellerInputIdentifier' => 'SellerInputIdentifier',
        'optionalFulfillmentProgram' => 'OptionalFulfillmentProgram',
    ];

    /**
     * @param  ?string  $marketplaceId  A marketplace identifier.
     * @param  ?string  $sellerId  The seller identifier.
     * @param  ?string  $idType  The type of product identifier used in a `FeesEstimateByIdRequest`.
     * @param  ?string  $idValue  The item identifier.
     * @param  ?bool  $isAmazonFulfilled  When true, the offer is fulfilled by Amazon.
     * @param  ?PriceToEstimateFees  $priceToEstimateFees  Price information for an item, used to estimate fees.
     * @param  ?string  $sellerInputIdentifier  A unique identifier provided by the caller to track this request.
     * @param  ?string  $optionalFulfillmentProgram  An optional enrollment program to return the estimated fees when the offer is fulfilled by Amazon (IsAmazonFulfilled is set to true).
     */
    public function __construct(
        public readonly ?string $marketplaceId = null,
        public readonly ?string $sellerId = null,
        public readonly ?string $idType = null,
        public readonly ?string $idValue = null,
        public readonly ?bool $isAmazonFulfilled = null,
        public readonly ?PriceToEstimateFees $priceToEstimateFees = null,
        public readonly ?string $sellerInputIdentifier = null,
        public readonly ?string $optionalFulfillmentProgram = null,
    ) {
    }
}
