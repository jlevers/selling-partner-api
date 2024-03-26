<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class LabelCustomization extends BaseDto
{
    protected static array $attributeMap = [
        'customTextForLabel' => 'CustomTextForLabel',
        'standardIdForLabel' => 'StandardIdForLabel',
    ];

    /**
     * @param  ?string  $customTextForLabel  Custom text to print on the label.
     *
     * Note: Custom text is only included on labels that are in ZPL format (ZPL203). FedEx does not support CustomTextForLabel.
     * @param  ?string  $standardIdForLabel  The type of standard identifier to print on the label.
     */
    public function __construct(
        public readonly ?string $customTextForLabel = null,
        public readonly ?string $standardIdForLabel = null,
    ) {
    }
}
