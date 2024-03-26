<?php

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class DeliveryChannel extends BaseDto
{
    /**
     * @param  ?bool  $isSupported
     * @param  ?OperationalConfiguration  $operationalConfiguration  The operational configuration of `supplySources`.
     */
    public function __construct(
        public readonly ?bool $isSupported = null,
        public readonly ?OperationalConfiguration $operationalConfiguration = null,
    ) {
    }
}
