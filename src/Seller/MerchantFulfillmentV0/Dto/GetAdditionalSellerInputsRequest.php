<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetAdditionalSellerInputsRequest extends BaseDto
{
    protected static array $attributeMap = [
        'shippingServiceId' => 'ShippingServiceId',
        'shipFromAddress' => 'ShipFromAddress',
        'orderId' => 'OrderId',
    ];

    /**
     * @param  string  $shippingServiceId  An Amazon-defined shipping service identifier.
     * @param  Address  $shipFromAddress  The postal address information.
     * @param  string  $orderId  An Amazon-defined order identifier, in 3-7-7 format.
     */
    public function __construct(
        public readonly string $shippingServiceId,
        public readonly Address $shipFromAddress,
        public readonly string $orderId,
    ) {
    }
}
