<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RequestedValueAddedService extends BaseDto
{
    /**
     * @param  string  $id  The identifier of the selected value-added service. Must be among those returned in the response to the getRates operation.
     */
    public function __construct(
        public readonly string $id,
    ) {
    }
}
