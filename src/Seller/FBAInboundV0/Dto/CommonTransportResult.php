<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class CommonTransportResult extends Dto
{
    protected static array $attributeMap = ['transportResult' => 'TransportResult'];

    /**
     * @param  ?TransportResult  $transportResult  The workflow status for a shipment with an Amazon-partnered carrier.
     */
    public function __construct(
        public readonly ?TransportResult $transportResult = null,
    ) {
    }
}
