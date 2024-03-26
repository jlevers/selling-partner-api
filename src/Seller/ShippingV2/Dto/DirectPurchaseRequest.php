<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class DirectPurchaseRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['packages' => [Package::class]];

    /**
     * @param  ChannelDetails  $channelDetails  Shipment source channel related information.
     * @param  ?Address  $shipTo  The address.
     * @param  ?Address  $shipFrom  The address.
     * @param  ?Address  $returnTo  The address.
     * @param  Package[]|null  $packages  A list of packages to be shipped through a shipping service offering.
     * @param  ?RequestedDocumentSpecification  $labelSpecifications  The document specifications requested. For calls to the purchaseShipment operation, the shipment purchase fails if the specified document specifications are not among those returned in the response to the getRates operation.
     */
    public function __construct(
        public readonly ChannelDetails $channelDetails,
        public readonly ?Address $shipTo = null,
        public readonly ?Address $shipFrom = null,
        public readonly ?Address $returnTo = null,
        public readonly ?array $packages = null,
        public readonly ?RequestedDocumentSpecification $labelSpecifications = null,
    ) {
    }
}
