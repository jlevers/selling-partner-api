<?php

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class StandardProductDescriptionModule extends BaseDto
{
    /**
     * @param  ParagraphComponent  $body  A list of rich text content, usually presented in a text box.
     */
    public function __construct(
        public readonly ParagraphComponent $body,
    ) {
    }
}
