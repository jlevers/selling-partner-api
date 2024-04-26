<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class ContainerSequenceNumbers extends Dto
{
    /**
     * @param  ?string  $containerSequenceNumber  A list of containers shipped
     */
    public function __construct(
        public readonly ?string $containerSequenceNumber = null,
    ) {
    }
}
