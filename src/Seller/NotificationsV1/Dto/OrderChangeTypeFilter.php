<?php

namespace SellingPartnerApi\Seller\NotificationsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OrderChangeTypeFilter extends BaseDto
{
    /**
     * @param  ?string[]  $orderChangeTypes  A list of order change types to subscribe to (e.g. BuyerRequestedChange). To receive notifications of all change types, do not provide this list.
     */
    public function __construct(
        public readonly ?array $orderChangeTypes = null,
    ) {
    }
}
