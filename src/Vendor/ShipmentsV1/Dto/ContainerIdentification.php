<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class ContainerIdentification extends Dto
{
    /**
     * @param  string  $containerIdentificationType  The container identification type.
     * @param  string  $containerIdentificationNumber  Container identification number that adheres to the definition of the container identification type.
     */
    public function __construct(
        public readonly string $containerIdentificationType,
        public readonly string $containerIdentificationNumber,
    ) {
    }
}
