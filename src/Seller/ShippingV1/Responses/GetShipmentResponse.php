<?php

namespace SellingPartnerApi\Seller\ShippingV1\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ShippingV1\Dto\Error;
use SellingPartnerApi\Seller\ShippingV1\Dto\Shipment;

final class GetShipmentResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?Shipment  $payload  The shipment related data.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?Shipment $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
