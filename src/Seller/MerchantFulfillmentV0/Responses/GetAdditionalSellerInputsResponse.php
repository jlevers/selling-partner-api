<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto\Error;
use SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto\GetAdditionalSellerInputsResult;

final class GetAdditionalSellerInputsResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?GetAdditionalSellerInputsResult  $payload  The payload for the getAdditionalSellerInputs operation.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?GetAdditionalSellerInputsResult $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
