<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TestOrder extends BaseDto
{
    /**
     * @param  string  $orderId  An error code that identifies the type of error that occurred.
     */
    public function __construct(
        public readonly string $orderId,
    ) {
    }
}
