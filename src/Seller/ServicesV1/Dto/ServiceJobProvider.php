<?php

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ServiceJobProvider extends BaseDto
{
    /**
     * @param  ?string  $serviceJobProviderId  The identifier of the service job provider.
     */
    public function __construct(
        public readonly ?string $serviceJobProviderId = null,
    ) {
    }
}
