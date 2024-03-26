<?php

namespace SellingPartnerApi\Seller\ProductFeesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FeesEstimateRequest extends BaseDto
{
    protected static array $attributeMap = [
        'marketplaceId' => 'MarketplaceId',
        'priceToEstimateFees' => 'PriceToEstimateFees',
        'identifier' => 'Identifier',
        'isAmazonFulfilled' => 'IsAmazonFulfilled',
        'optionalFulfillmentProgram' => 'OptionalFulfillmentProgram',
    ];

    /**
     * @param  string  $marketplaceId  A marketplace identifier.
     * @param  PriceToEstimateFees  $priceToEstimateFees  Price information for an item, used to estimate fees.
     * @param  string  $identifier  A unique identifier provided by the caller to track this request.
     * @param  ?bool  $isAmazonFulfilled  When true, the offer is fulfilled by Amazon.
     * @param  ?string  $optionalFulfillmentProgram  An optional enrollment program to return the estimated fees when the offer is fulfilled by Amazon (IsAmazonFulfilled is set to true).
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly PriceToEstimateFees $priceToEstimateFees,
        public readonly string $identifier,
        public readonly ?bool $isAmazonFulfilled = null,
        public readonly ?string $optionalFulfillmentProgram = null,
    ) {
    }
}
