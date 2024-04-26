<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MessagingV1\Dto;

use SellingPartnerApi\Dto;

final class MessagingAction extends Dto
{
    public function __construct(
        public readonly string $name,
    ) {
    }
}
