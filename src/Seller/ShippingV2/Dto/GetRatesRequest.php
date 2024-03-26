<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetRatesRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['packages' => [Package::class], 'taxDetails' => [TaxDetail::class]];

    /**
     * @param  Address  $shipFrom  The address.
     * @param  Package[]  $packages  A list of packages to be shipped through a shipping service offering.
     * @param  ChannelDetails  $channelDetails  Shipment source channel related information.
     * @param  ?Address  $shipTo  The address.
     * @param  ?Address  $returnTo  The address.
     * @param  ?DateTime  $shipDate  The ship date and time (the requested pickup). This defaults to the current date and time.
     * @param  ?ValueAddedServiceDetails  $valueAddedServices  A collection of supported value-added services.
     * @param  TaxDetail[]|null  $taxDetails  A list of tax detail information.
     */
    public function __construct(
        public readonly Address $shipFrom,
        public readonly array $packages,
        public readonly ChannelDetails $channelDetails,
        public readonly ?Address $shipTo = null,
        public readonly ?Address $returnTo = null,
        public readonly ?\DateTime $shipDate = null,
        public readonly ?ValueAddedServiceDetails $valueAddedServices = null,
        public readonly ?array $taxDetails = null,
    ) {
    }
}
