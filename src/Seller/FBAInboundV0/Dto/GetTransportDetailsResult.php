<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetTransportDetailsResult extends BaseDto
{
    protected static array $attributeMap = ['transportContent' => 'TransportContent'];

    /**
     * @param  ?TransportContent  $transportContent  Inbound shipment information, including carrier details, shipment status, and the workflow status for a request for shipment with an Amazon-partnered carrier.
     */
    public function __construct(
        public readonly ?TransportContent $transportContent = null,
    ) {
    }
}
