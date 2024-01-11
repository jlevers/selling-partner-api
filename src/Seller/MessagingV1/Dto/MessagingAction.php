<?php

namespace SellingPartnerApi\Seller\MessagingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class MessagingAction extends BaseDto
{
    public function __construct(
        public readonly string $name,
    ) {
    }
}
