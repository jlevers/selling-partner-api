<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TransportContent extends BaseDto
{
    /**
     * @param  TransportHeader  $transportHeader The shipping identifier, information about whether the shipment is by an Amazon-partnered carrier, and information about whether the shipment is Small Parcel or Less Than Truckload/Full Truckload (LTL/FTL).
     * @param  TransportDetailOutput  $transportDetails Inbound shipment information, including carrier details and shipment status.
     * @param  TransportResult  $transportResult The workflow status for a shipment with an Amazon-partnered carrier.
     */
    public function __construct(
        public readonly ?TransportHeader $transportHeader = null,
        public readonly ?TransportDetailOutput $transportDetails = null,
        public readonly ?TransportResult $transportResult = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
