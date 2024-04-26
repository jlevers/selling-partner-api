<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class SubmitFulfillmentOrderStatusUpdateRequest extends Dto
{
    /**
     * @param  ?string  $fulfillmentOrderStatus  The current status of the fulfillment order.
     */
    public function __construct(
        public readonly ?string $fulfillmentOrderStatus = null,
    ) {
    }
}
