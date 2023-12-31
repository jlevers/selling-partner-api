<?php

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateShipmentRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['containers' => [Container::class]];

    /**
     * @param  string  $clientReferenceId Client reference id.
     * @param  Address  $address The address.
     * @param  Address  $address The address.
     * @param  Container[]  $containers A list of container.
     */
    public function __construct(
        public readonly ?string $clientReferenceId = null,
        public readonly ?Address $address = null,
        public readonly ?array $containers = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
