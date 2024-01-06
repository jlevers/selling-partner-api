<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InboundShipmentPlanRequestItem extends BaseDto
{
    protected static array $complexArrayTypes = ['prepDetailsList' => [PrepDetails::class]];

    /**
     * @param  string  $sellerSku The seller SKU of the item.
     * @param  string  $asin The Amazon Standard Identification Number (ASIN) of the item.
     * @param  string  $condition The condition of the item.
     * @param  int  $quantity The item quantity.
     * @param  int  $quantityInCase The item quantity.
     * @param  PrepDetails[]  $prepDetailsList A list of preparation instructions and who is responsible for that preparation.
     */
    public function __construct(
        public readonly ?string $sellerSku = null,
        public readonly ?string $asin = null,
        public readonly ?string $condition = null,
        public readonly ?int $quantity = null,
        public readonly ?int $quantityInCase = null,
        public readonly ?array $prepDetailsList = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
