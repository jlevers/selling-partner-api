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
     * @param  ?\DateTimeInterface  $confirmedNeedByDate  Type containing date in string format
     * @param  ?\DateTimeInterface  $confirmedFulfillableDate  Type containing date in string format
     */
    public function __construct(
        public readonly ?\DateTimeInterface $confirmedNeedByDate = null,
        public readonly ?\DateTimeInterface $confirmedFulfillableDate = null,
    ) {
    }
}
