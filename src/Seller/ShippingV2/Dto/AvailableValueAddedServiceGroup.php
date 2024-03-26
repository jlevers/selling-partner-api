<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AvailableValueAddedServiceGroup extends BaseDto
{
    protected static array $complexArrayTypes = ['valueAddedServices' => [ValueAddedService::class]];

    /**
     * @param  string  $groupId  The type of the value-added service group.
     * @param  string  $groupDescription  The name of the value-added service group.
     * @param  bool  $isRequired  When true, one or more of the value-added services listed must be specified.
     * @param  ValueAddedService[]|null  $valueAddedServices  A list of optional value-added services available for purchase with a shipping service offering.
     */
    public function __construct(
        public readonly string $groupId,
        public readonly string $groupDescription,
        public readonly bool $isRequired,
        public readonly ?array $valueAddedServices = null,
    ) {
    }
}
