<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GiftDetails extends BaseDto
{
    /**
     * @param  ?string  $giftMessage  Gift message to be printed in shipment.
     * @param  ?string  $giftWrapId  Gift wrap identifier for the gift wrapping, if any.
     */
    public function __construct(
        public readonly ?string $giftMessage = null,
        public readonly ?string $giftWrapId = null,
    ) {
    }
}
