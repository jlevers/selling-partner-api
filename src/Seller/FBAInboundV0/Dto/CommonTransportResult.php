<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CommonTransportResult extends BaseDto
{
    /**
     * @param  TransportResult  $transportResult The workflow status for a shipment with an Amazon-partnered carrier.
     */
    public function __construct(
        public readonly TransportResult $transportResult,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
