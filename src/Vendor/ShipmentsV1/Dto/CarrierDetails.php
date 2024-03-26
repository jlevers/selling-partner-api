<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CarrierDetails extends BaseDto
{
    /**
     * @param  ?string  $name  The field is used to represent the carrier used for performing the shipment.
     * @param  ?string  $code  Code that identifies the carrier for the shipment. The Standard Carrier Alpha Code (SCAC) is a unique two to four letter code used to identify a carrier. Carrier SCAC codes are assigned and maintained by the NMFTA (National Motor Freight Association).
     * @param  ?string  $phone  The field is used to represent the Carrier contact number.
     * @param  ?string  $email  The field is used to represent the carrier Email id.
     * @param  ?string  $shipmentReferenceNumber  The field is also known as PRO number is a unique number assigned by the carrier. It is used to identify and track the shipment that goes out for delivery. This field is mandatory for US, CA, MX shipment confirmations.
     */
    public function __construct(
        public readonly ?string $name = null,
        public readonly ?string $code = null,
        public readonly ?string $phone = null,
        public readonly ?string $email = null,
        public readonly ?string $shipmentReferenceNumber = null,
    ) {
    }
}
