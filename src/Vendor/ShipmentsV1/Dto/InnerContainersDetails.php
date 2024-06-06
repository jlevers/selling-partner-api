<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class InnerContainersDetails extends Dto
{
    protected static array $complexArrayTypes = ['containerSequenceNumbers' => [ContainerSequenceNumbers::class]];

    /**
     * @param  ?int  $containerCount  Total containers as part of the shipment
     * @param  ContainerSequenceNumbers[]|null  $containerSequenceNumbers  Container sequence numbers that are involved in this shipment.
     */
    public function __construct(
        public readonly ?int $containerCount = null,
        public readonly ?array $containerSequenceNumbers = null,
    ) {
    }
}
