<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ContainerIdentification extends BaseDto
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
