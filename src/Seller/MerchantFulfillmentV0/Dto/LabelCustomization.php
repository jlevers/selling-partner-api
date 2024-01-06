<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class LabelCustomization extends BaseDto
{
    /**
     * @param  string  $customTextForLabel Custom text to print on the label.
     *
     * Note: Custom text is only included on labels that are in ZPL format (ZPL203). FedEx does not support CustomTextForLabel.
     * @param  string  $standardIdForLabel The type of standard identifier to print on the label.
     */
    public function __construct(
        public readonly string $customTextForLabel,
        public readonly string $standardIdForLabel,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
