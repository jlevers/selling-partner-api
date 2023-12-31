<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetRatesRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['packages' => [Package::class], 'taxDetails' => [TaxDetail::class]];

    /**
     * @param  Address  $address The address.
     * @param  Address  $address The address.
     * @param  Address  $address The address.
     * @param  string  $shipDate The ship date and time (the requested pickup). This defaults to the current date and time.
     * @param  Package[]  $packages A list of packages to be shipped through a shipping service offering.
     * @param  ValueAddedServiceDetails  $valueAddedServiceDetails A collection of supported value-added services.
     * @param  TaxDetail[]  $taxDetails A list of tax detail information.
     * @param  ChannelDetails  $channelDetails Shipment source channel related information.
     */
    public function __construct(
        public readonly ?Address $address = null,
        public readonly ?string $shipDate = null,
        public readonly ?array $packages = null,
        public readonly ?ValueAddedServiceDetails $valueAddedServiceDetails = null,
        public readonly ?array $taxDetails = null,
        public readonly ?ChannelDetails $channelDetails = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
