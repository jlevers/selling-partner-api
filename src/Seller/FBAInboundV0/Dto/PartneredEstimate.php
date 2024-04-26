<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class PartneredEstimate extends Dto
{
    protected static array $attributeMap = [
        'amount' => 'Amount',
        'confirmDeadline' => 'ConfirmDeadline',
        'voidDeadline' => 'VoidDeadline',
    ];

    /**
     * @param  Amount  $amount  The monetary value.
     * @param  ?DateTime  $confirmDeadline  Timestamp in ISO 8601 format.
     * @param  ?DateTime  $voidDeadline  Timestamp in ISO 8601 format.
     */
    public function __construct(
        public readonly Amount $amount,
        public readonly ?\DateTime $confirmDeadline = null,
        public readonly ?\DateTime $voidDeadline = null,
    ) {
    }
}
