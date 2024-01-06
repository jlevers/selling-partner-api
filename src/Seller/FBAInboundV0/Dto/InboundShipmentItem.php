<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InboundShipmentItem extends BaseDto
{
    protected static array $complexArrayTypes = ['prepDetailsList' => [PrepDetails::class]];

    /**
     * @param  string  $shipmentId A shipment identifier originally returned by the createInboundShipmentPlan operation.
     * @param  string  $sellerSku The seller SKU of the item.
     * @param  string  $fulfillmentNetworkSku Amazon's fulfillment network SKU of the item.
     * @param  int  $quantityShipped The item quantity.
     * @param  int  $quantityReceived The item quantity.
     * @param  int  $quantityInCase The item quantity.
     * @param  PrepDetails[]  $prepDetailsList A list of preparation instructions and who is responsible for that preparation.
     */
    public function __construct(
        public readonly ?string $shipmentId = null,
        public readonly ?string $sellerSku = null,
        public readonly ?string $fulfillmentNetworkSku = null,
        public readonly ?int $quantityShipped = null,
        public readonly ?int $quantityReceived = null,
        public readonly ?int $quantityInCase = null,
        public readonly ?string $releaseDate = null,
        public readonly ?array $prepDetailsList = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
