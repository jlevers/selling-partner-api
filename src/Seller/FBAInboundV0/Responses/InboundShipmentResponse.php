<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\Error;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\InboundShipmentResult;

final class InboundShipmentResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?InboundShipmentResult  $payload
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?InboundShipmentResult $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
