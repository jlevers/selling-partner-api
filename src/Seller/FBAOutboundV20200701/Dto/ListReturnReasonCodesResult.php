<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class ListReturnReasonCodesResult extends Dto
{
    protected static array $complexArrayTypes = ['reasonCodeDetails' => [ReasonCodeDetails::class]];

    /**
     * @param  ReasonCodeDetails[]|null  $reasonCodeDetails  An array of return reason code details.
     */
    public function __construct(
        public readonly ?array $reasonCodeDetails = null,
    ) {
    }
}
