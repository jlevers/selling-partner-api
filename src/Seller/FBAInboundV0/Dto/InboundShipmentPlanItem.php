<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InboundShipmentPlanItem extends BaseDto
{
    protected static array $complexArrayTypes = ['prepDetailsList' => [PrepDetails::class]];

    /**
     * @param  string  $sellerSku The seller SKU of the item.
     * @param  string  $fulfillmentNetworkSku Amazon's fulfillment network SKU of the item.
     * @param  int  $quantity The item quantity.
     * @param  PrepDetails[]  $prepDetailsList A list of preparation instructions and who is responsible for that preparation.
     */
    public function __construct(
        public readonly ?string $sellerSku = null,
        public readonly ?string $fulfillmentNetworkSku = null,
        public readonly ?int $quantity = null,
        public readonly ?array $prepDetailsList = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
