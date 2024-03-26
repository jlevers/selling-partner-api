<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SubmitFulfillmentOrderStatusUpdateRequest extends BaseDto
{
    /**
     * @param  ?string  $fulfillmentOrderStatus  The current status of the fulfillment order.
     */
    public function __construct(
        public readonly ?string $fulfillmentOrderStatus = null,
    ) {
    }
}
