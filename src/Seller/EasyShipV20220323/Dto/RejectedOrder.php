<?php

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RejectedOrder extends BaseDto
{
    /**
     * @param  string  $amazonOrderId  An Amazon-defined order identifier. Identifies the order that the seller wants to deliver using Amazon Easy Ship.
     * @param  ?Error  $error  Error response returned when the request is unsuccessful.
     */
    public function __construct(
        public readonly string $amazonOrderId,
        public readonly ?Error $error = null,
    ) {
    }
}
