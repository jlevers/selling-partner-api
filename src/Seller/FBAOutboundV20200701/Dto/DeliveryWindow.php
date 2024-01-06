<?php

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class DeliveryWindow extends BaseDto
{
    public function __construct(
        public readonly ?string $startDate = null,
        public readonly ?string $endDate = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
