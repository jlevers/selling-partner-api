<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class DeliveryWindow extends Dto
{
    public function __construct(
        public readonly \DateTimeInterface $startDate,
        public readonly \DateTimeInterface $endDate,
    ) {
    }
}
