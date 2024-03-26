<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InvalidItemReason extends BaseDto
{
    /**
     * @param  string  $invalidItemReasonCode  A code for why the item is invalid for return.
     * @param  string  $description  A human readable description of the invalid item reason code.
     */
    public function __construct(
        public readonly string $invalidItemReasonCode,
        public readonly string $description,
    ) {
    }
}
