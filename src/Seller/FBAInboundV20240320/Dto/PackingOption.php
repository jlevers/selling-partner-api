<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class PackingOption extends Dto
{
    protected static array $complexArrayTypes = [
        'discounts' => [Incentive::class],
        'fees' => [Incentive::class],
        'supportedShippingConfigurations' => [ShippingConfiguration::class],
    ];

    /**
     * @param  Incentive[]  $discounts  Discount for the offered option.
     * @param  Incentive[]  $fees  Fee for the offered option.
     * @param  string[]  $packingGroups  Packing group IDs.
     * @param  string  $packingOptionId  Identifier of a packing option.
     * @param  string  $status  The status of the packing option. Can be: `OFFERED`, `ACCEPTED`, or `EXPIRED`.
     * @param  ShippingConfiguration[]  $supportedShippingConfigurations  List of supported shipping modes.
     * @param  ?\DateTimeInterface  $expiration  The timestamp at which this packing option becomes no longer valid. This is based in ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
     */
    public function __construct(
        public readonly array $discounts,
        public readonly array $fees,
        public readonly array $packingGroups,
        public readonly string $packingOptionId,
        public readonly string $status,
        public readonly array $supportedShippingConfigurations,
        public readonly ?\DateTimeInterface $expiration = null,
    ) {
    }
}
