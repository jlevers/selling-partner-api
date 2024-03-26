<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Vendor\ShipmentsV1\Dto\Error;
use SellingPartnerApi\Vendor\ShipmentsV1\Dto\TransportationLabels;

final class GetShipmentLabels extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?TransportationLabels  $payload
     * @param  Error[]  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?TransportationLabels $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
