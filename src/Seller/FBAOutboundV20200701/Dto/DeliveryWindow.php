<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class DeliveryWindow extends BaseDto
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
