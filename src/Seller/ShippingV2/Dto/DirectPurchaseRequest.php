<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class DirectPurchaseRequest extends BaseDto
{
    protected static array $complexArrayTypes = ['packages' => [Package::class]];

    /**
     * @param  Address  $address The address.
     * @param  Address  $address The address.
     * @param  Address  $address The address.
     * @param  Package[]  $packages A list of packages to be shipped through a shipping service offering.
     * @param  ChannelDetails  $channelDetails Shipment source channel related information.
     * @param  RequestedDocumentSpecification  $requestedDocumentSpecification The document specifications requested. For calls to the purchaseShipment operation, the shipment purchase fails if the specified document specifications are not among those returned in the response to the getRates operation.
     */
    public function __construct(
        public readonly ?Address $address = null,
        public readonly ?array $packages = null,
        public readonly ?ChannelDetails $channelDetails = null,
        public readonly ?RequestedDocumentSpecification $requestedDocumentSpecification = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
