<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class ConfirmPreorderResult extends Dto
{
    protected static array $attributeMap = [
        'confirmedNeedByDate' => 'ConfirmedNeedByDate',
        'confirmedFulfillableDate' => 'ConfirmedFulfillableDate',
    ];

    /**
     * @param  ?DateTime  $confirmedNeedByDate  Type containing date in string format
     * @param  ?DateTime  $confirmedFulfillableDate  Type containing date in string format
     */
    public function __construct(
        public readonly ?\DateTime $confirmedNeedByDate = null,
        public readonly ?\DateTime $confirmedFulfillableDate = null,
    ) {
    }
}
