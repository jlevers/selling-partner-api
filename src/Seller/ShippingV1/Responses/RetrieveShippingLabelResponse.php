<?php

namespace SellingPartnerApi\Seller\ShippingV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ShippingV1\Dto\Error;
use SellingPartnerApi\Seller\ShippingV1\Dto\RetrieveShippingLabelResult;

final class RetrieveShippingLabelResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?RetrieveShippingLabelResult  $payload  The payload schema for the retrieveShippingLabel operation.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?RetrieveShippingLabelResult $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
