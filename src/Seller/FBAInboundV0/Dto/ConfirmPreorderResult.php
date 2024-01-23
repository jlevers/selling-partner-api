<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ConfirmPreorderResult extends BaseDto
{
    protected static array $attributeMap = [
        'confirmedNeedByDate' => 'ConfirmedNeedByDate',
        'confirmedFulfillableDate' => 'ConfirmedFulfillableDate',
    ];

    /**
     * @param  ?string  $confirmedNeedByDate
     * @param  ?string  $confirmedFulfillableDate
     */
    public function __construct(
        public readonly ?string $confirmedNeedByDate = null,
        public readonly ?string $confirmedFulfillableDate = null,
    ) {
    }
}
