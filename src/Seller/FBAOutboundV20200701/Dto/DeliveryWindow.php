<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class DeliveryWindow extends Dto
{
    /**
     * @param  DateTime  $startDate
     * @param  DateTime  $endDate
     */
    public function __construct(
        public readonly \DateTime $startDate,
        public readonly \DateTime $endDate,
    ) {
    }
}
