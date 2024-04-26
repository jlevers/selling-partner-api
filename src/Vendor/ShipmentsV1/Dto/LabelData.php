<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class LabelData extends Dto
{
    /**
     * @param  ?int  $labelSequenceNumber  Label list sequence number
     * @param  ?string  $labelFormat  Type of the label format like PDF
     * @param  ?string  $carrierCode  Unique identification for  the carrier like UPS,DHL,USPS..etc
     * @param  ?string  $trackingId  Tracking Id for the transportation.
     * @param  ?string  $label  Label created as part of the transportation and it is base64 encoded
     */
    public function __construct(
        public readonly ?int $labelSequenceNumber = null,
        public readonly ?string $labelFormat = null,
        public readonly ?string $carrierCode = null,
        public readonly ?string $trackingId = null,
        public readonly ?string $label = null,
    ) {
    }
}
