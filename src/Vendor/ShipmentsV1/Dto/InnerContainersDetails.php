<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InnerContainersDetails extends BaseDto
{
    protected static array $complexArrayTypes = ['containerSequenceNumbers' => [ContainerSequenceNumbers::class]];

    /**
     * @param  ?int  $containerCount  Total containers as part of the shipment
     * @param  ContainerSequenceNumbers[]  $containerSequenceNumbers  Container sequence numbers that are involved in this shipment.
     */
    public function __construct(
        public readonly ?int $containerCount = null,
        public readonly ?array $containerSequenceNumbers = null,
    ) {
    }
}
