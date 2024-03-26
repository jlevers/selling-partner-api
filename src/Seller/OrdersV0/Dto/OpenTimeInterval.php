<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OpenTimeInterval extends BaseDto
{
    protected static array $attributeMap = ['hour' => 'Hour', 'minute' => 'Minute'];

    /**
     * @param  ?int  $hour  The hour when the business opens or closes.
     * @param  ?int  $minute  The minute when the business opens or closes.
     */
    public function __construct(
        public readonly ?int $hour = null,
        public readonly ?int $minute = null,
    ) {
    }
}
