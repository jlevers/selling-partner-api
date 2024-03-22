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
     * @param  ?DateTime  $confirmedNeedByDate
     * @param  ?DateTime  $confirmedFulfillableDate
     */
    public function __construct(
        public readonly ?\DateTime $confirmedNeedByDate = null,
        public readonly ?\DateTime $confirmedFulfillableDate = null,
    ) {
    }
}
