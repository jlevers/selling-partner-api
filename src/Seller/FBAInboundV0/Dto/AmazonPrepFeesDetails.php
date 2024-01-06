<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AmazonPrepFeesDetails extends BaseDto
{
    /**
     * @param  string  $prepInstruction Preparation instructions for shipping an item to Amazon's fulfillment network. For more information about preparing items for shipment to Amazon's fulfillment network, see the Seller Central Help for your marketplace.
     * @param  Amount  $feePerUnit The monetary value.
     */
    public function __construct(
        public readonly string $prepInstruction,
        public readonly Amount $feePerUnit,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
