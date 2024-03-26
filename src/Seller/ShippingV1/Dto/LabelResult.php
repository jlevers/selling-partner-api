<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class LabelResult extends BaseDto
{
    /**
     * @param  ?string  $containerReferenceId  An identifier for the container. This must be unique within all the containers in the same shipment.
     * @param  ?string  $trackingId  The tracking identifier assigned to the container.
     * @param  ?Label  $label  The label details of the container.
     */
    public function __construct(
        public readonly ?string $containerReferenceId = null,
        public readonly ?string $trackingId = null,
        public readonly ?Label $label = null,
    ) {
    }
}
