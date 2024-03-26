<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SupplySourceConfiguration extends BaseDto
{
    /**
     * @param  ?OperationalConfiguration  $operationalConfiguration  The operational configuration of `supplySources`.
     * @param  ?string  $timezone  Please see RFC 6557, should be a canonical time zone ID as listed here: https://www.joda.org/joda-time/timezones.html.
     */
    public function __construct(
        public readonly ?OperationalConfiguration $operationalConfiguration = null,
        public readonly ?string $timezone = null,
    ) {
    }
}
